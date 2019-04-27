<?php


namespace Src\Libs\Dmr;
// namespace Dmr;

class h
{
    private static $_dmr_env = DMR_ENV;
    public static $_version = "5.0.0";   //4.3.3
    public static $_style = "width:90%;margin:0 auto; margin-top:10px; background-color:#FFFFE0;padding: 10px;border: 2px solid gray;box-shadow: 10px 10px 5px #888888;font-family:arial";

    /**
     * d= de todas las variables
     * @param type $object_debug
     * @param type $die (default: true)
     */
    static public function d($object_debug = "", $die = true)
    {


        if (self::$_dmr_env != "prod") {
            echo "<hr><div style='width:90%;margin:0 auto;font-family:arial'><h4>Great <b>'h class'</b> " . self::getVersion() . ".</h4>";
            echo "<div style='" . self::$_style . ";background-color: lightgreen'>S_SESSION:";
            self::debug($_SESSION, "green");
            echo "</div>";

            if ($object_debug != "") {
                echo "<div style='" . self::$_style . ";background-color: ffc18e'>:";
                echo "Variable object_debug:";
                self::debug($object_debug, "red");
                echo "</div>";
            }


            if (@$debug != "") {
                echo "<div style='" . self::$_style . ";background-color: #bfccfc'>:";
                echo "Variable DEBUG:";
                self::debug($debug, "navy");
                echo "</div>";
            }
            if ($_POST) {
                echo "<div style='" . self::$_style . ";background-color: #ededed'>:";
                echo "Variable POST:";
                self::debug($_POST, "black");
                echo "</div>";
            }
            if ($_GET) {
                echo "<div style='" . self::$_style . ";background-color: #9370DB'>:";
                echo "Variable GET:";
                self::debug($_GET, "purple");
                echo "</div>";
            }
            if (1 == 1) {
                $dmr = get_defined_constants(true);
                echo "<div style='" . self::$_style . ";background-color: lightyellow'>";
                echo "CONSTANTES:";
                self::debug(htmlspecialchars(print_r($dmr["user"], true)), "black");
                echo "</div>";
            }

            //            echo "<br>FUNCIONES";
            //            self::debug(get_defined_vars(), "gray");

            echo "</div>";
            echo "</div>";
            if ($die) {
                die("<hr>die D");
            }
        }
    }

    /**
     * Un print_r vitaminado.
     * p=de producció
     * @param type $object_debug
     * @param type $die
     */
    static public function p($object_debug = "", $die = true)
    {
        if (self::$_dmr_env != "prod") {
            echo "<pre>" . print_r($object_debug, true) . "</pre>";
            if ($die) {
                die("<hr>die p");
            }
        }
    }

    /**
     * s=de session
     * @param type $object_debug
     * @param type $die (default: true)
     */
    static public function s($object_debug = "", $die = true)
    {
        if (self::$_dmr_env != "prod") {
            echo "<div style='" . self::$_style . "'>SESSION:";
            self::debug($_SESSION, "green");
            echo "</div>";
            if ($die) {
                die("<hr>die S");
            }
        }
    }

    /**
     * v= de variable
     * @param type $object_debug
     * @param type $die  (default: true)
     */
    static public function v($object_debug = "", $die = true)
    {
        if (self::$_dmr_env != "prod") {
            echo "<div style='" . self::$_style . "'>VARIABLE:";
            echo "<br>Variable object_debug: " . gettype($object_debug);
            self::debug($object_debug, "red");
            echo "</div>";
            if ($die) {
                die("<hr>die V");
            }
        }
    }

    /**
     * echo versión
     */
    static public function getVersion()
    {
        return "v." . self::$_version;
    }

    /**
     * 
     * @param type $debug
     * @param type $color
     */
    static public function debug($debug = '', $color = "black")
    {
        //global $debug, $dieOnErrors;
        //@TODO Hacer autohide !!
        //$str="<p class=\"cuadro_alertaroja\">Error :: $error</p>";
        $chars = strlen(print_r($debug, true));
        if ($chars < 200) {
            $chars = 500;
        }
        if ($chars > 1000) {
            $chars = 800;
        }
        echo '<textarea style="height:' . ($chars / 2) . 'px;width:100%;color:' . $color . ';boder-color:' . $color . '">';
        //ob_start();
        print_r($debug);
        //$a=ob_get_contents();
        //ob_end_clean();
        //echo htmlspecialchars($a,ENT_QUOTES); // Escape every HTML special chars (especially > and < )
        echo '</textarea>';
    }
}
