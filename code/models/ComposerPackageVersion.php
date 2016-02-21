<?php
/**
 * Describes a installed composer package version.
 *
 * This is a DataObject to allow saving the information in the db to use the information in various ways.
 */
class ComposerPackageVersion extends DataObject
{
    /**
     * @var array
     */
    private static $db = array(
        'Scope' => "Enum('Global,Project','Project')",
        'Package' => 'Varchar(255)',
        'Version' => 'Varchar(255)',
    );

    /**
     * @var array
     */
    private static $summary_fields = array(
        'Scope',
        'Package',
        'Version',
    );

    /**
     * requireDefaultRecords() gets abused to update the information on dev/build.
     */
    public function requireDefaultRecords()
    {
        parent::requireDefaultRecords();

        // delete all records of this object
        foreach (self::get() as $package) {
            $package->delete();
        }

        // generate the records new
        $globalPackages = $this->getPackageVersions(true);
        $packages = $this->getPackageVersions();

        // write all the package information
        foreach (array_merge($globalPackages, $packages) as $package) {
            $instance = self::create($package);
            $instance->write();
        }
    }

    /**
     * returns a prepared list of the packages.
     *
     * @param bool $global (default: false)
     *
     * @return array
     */
    public function getPackageVersions($global = false)
    {
        // different commands for project specific and global packages
        if ($global) {
            exec('php ../vendor/composer/composer/bin/composer global show --installed 2> /dev/null', $packages);
        } else {
            exec('php ../vendor/composer/composer/bin/composer show --installed --working-dir=.. 2> /dev/null', $packages);
        }

        // prepare the array
        return array_map(function ($package) use (&$global) {
            // some regex to parse the package string
            $elements = preg_split('/\s+/', $package);

            // prep a new array.
            $match = array(
                'Scope' => ($global) ? 'Global' : 'Project',
                'Package' => $elements[0],
            );

            // ensure to keep the hash if it has been defined
            if (true
                && array_key_exists(2, $elements)
                && strlen($elements[2]) == 7
                && strtolower($elements[2]) == $elements[2]
            ) {
                $match['Version'] = $elements[1].' '.$elements[2];
            } else {
                $match['Version'] = $elements[1];
            }

            // return
            return $match;
        }, $packages);
    }
}
