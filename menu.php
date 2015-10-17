<?php
    $myArray = ['Character Count', 'Word Count', 'Split string on spaces', 'Shuffle', 'Reverse', 'Capitalize each word', 'Convert to Lowercase', 'Convert to Uppercase', 'Hexidecimal to Binary', 'Binary to Hexidecimal', 'Convert to md5', 'Convert to sha1'];

    class selectMenu {
        private $items;  // array of items.
        private $options; // hold all html options
        private $selectMenu; // final select menu

        function __construct($itemArray='') {
            $this->items = $itemArray;
        }

        private function buildOptions() {
            $this->options = "<option value=''>Select Manipulation</option>";
            forEach($this->items as $item) {
                $this->options .= "<option value='"
                . $item . "'>"
                . $item . "</option>";
            }
        }

        private function buildSelect() {
            $this->selectMenu = "<select name='method'>" . $this->options . "</select>";
        }

        public function setOptions($array) {
            $this->items = $array;
        }

        public function makeMenu() {
            $this->buildOptions();
            $this->buildSelect();
            return $this->selectMenu;
        }
    }

    $myMenu = new selectMenu;
    $myMenu->setOptions($myArray);
?>

<form method="POST">

String: <input type="text" name="query" />
<?php echo $myMenu->makeMenu(); ?>
<input type="submit" value="Submit" />

</form>
