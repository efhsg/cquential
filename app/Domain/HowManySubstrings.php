<?php


namespace App\Domain;


class HowManySubstrings
{

    // @array
    private static $input = [];
    // @array
    private static $output = [];

    public static function run(): void
    {
        self::readInput();
        self::calculateOutput();
        self::writeOutput();
    }

    /**
     * @param string $word
     * @return int
     */
    public static function calculateNumberOfSubstrings(string $word): int
    {
        $substrings = [];

        for ($substringLength = 1; $substringLength <= strlen($word); $substringLength++) {
            for ($startLetter = 0; $startLetter <= strlen($word); $startLetter++) {
                $substring = substr($word, $startLetter, $substringLength);
                if (!in_array($substring, $substrings) && strlen($substring) > 0) {
                    $substrings[] = $substring;
                }
            }

        }

        return sizeof($substrings);
    }

    private static function readInput(): void
    {
        $inputfile = fopen(config('cquential.inputDir') . DIRECTORY_SEPARATOR . "HowManySubStringsIn.txt",
            "r") or die("Unable to open file!");

        while (!feof($inputfile)) {
            $line = str_replace(PHP_EOL, '', fgets($inputfile));
            if ($line) {
                self::$input[] = $line;
            }
        }
        fclose($inputfile);

    }

    private static function calculateOutput(): void
    {
        foreach (array_slice(self::$input, 2) as $queryparams) {
            $left = explode(" ", $queryparams) [0];
            $right = explode(" ", $queryparams) [1];
            $length = $right - $left + 1;

            self::$output[] = self::calculateNumberOfSubstrings(substr(self::$input[1], $left, $length));

        }

    }

    private static function writeOutput(): void
    {
        $outputfile = fopen(config('cquential.outputDir') . DIRECTORY_SEPARATOR . "HowManySubStringsOut.txt",
            "w") or die("Unable to open file!");

        foreach (self::$output as $outputline) {
            fwrite($outputfile, $outputline . (next(self::$output) ? PHP_EOL : ""));
        }
        fclose($outputfile);
    }

}
