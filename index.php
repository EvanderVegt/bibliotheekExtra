<html>
    <body>
        <p id="oefening"></p>


        <script>

            var day;
            switch (new Date().getDay()) {
                case 0:
                    day = "Zondag";
                    break;
                case 1:
                    day = "Maandag";
                    break;
                case 2:
                    day = "Dinsdag";
                    break;
                case 3:
                    day = "Woensdag";
                    break;
                case 4:
                    day = "Donderdag";
                    break;
                case 5:
                    day = "Vrijdag";
                    break;
                case  6:
                    day = "Zaterdag";
            }
            document.getElementById("oefening").innerHTML = "Vandaag is het " + day;

        </script>

        <?PHP

        class User {

            public function __construct($age) {
                $this->age = $age;
            }

            public function getAge() {
                echo 'Leeftijd: ' . $this->age;
            }

        }

        $erik = new User(49);
        $jan = new User(48);
        $piet = new User(47);

        $erik->getAge();
        $jan->getAge();
        $piet->getAge();
        ?>


    </body>
</html>
