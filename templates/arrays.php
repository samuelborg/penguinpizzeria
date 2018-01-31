<?php

    $pageInfo = array
        (
            "index" => array
                (
                    "title" => "Home",
                    "heading" => "Penguin Pizzeria",
                    "subheading" => "<br><br>IT'S FLIPPER LICKIN' GOOD!"
                ),
            "about" => array
                (
                    "title" => "About",
                    "heading" => "About us<br>",
                    "subheading" => "<br><br>We don't mean to brag but..."
                ),
            "menu" => array
                (
                    "title" => "Menu",
                    "heading" => "Finest Meals in the Continent",
                    "subheading" => "<br><br>And that's not just because we're the only ones here"
                ),
            "contact" => array
                (
                    "title" => "Contact",
                    "heading" => "Contact Us",
                    "subheading" => "<br><br>WE JUST GOT CABLE"
                ),
            "booking" => array
                (
                    "title" => "Booking",
                    "heading" => "Book an Igloo<br>",
                    "subheading" => "<br><br>You know you want to"
                ),
            "dish" => array
                (
                    "title" => "Dish",
                    "heading" => "Finest Meals in the Continent",
                    "subheading" => "<br><br>And that's not just because we're the only ones here"
                )
        );

    //Navigation Items

    $navItems = array(

                    array(
                        "slug" => "index.php",
                        "title" => "Home"
                    ),
                    array(
                        "slug" => "about.php",
                        "title" => "About"
                    ),
                    array(
                        "slug" => "menu.php",
                        "title" => "Menu"
                    ),
                    array(
                        "slug" => "booking.php",
                        "title" => "Book an Igloo"
                    ),
                    array(
                        "slug" => "contact.php",
                        "title" => "Contact"
                    )
            );
    //Employee Team

    $teamMembers = array(
                array(
                    "name" => "Nicholas Cage",
                    "job" => "Manager",
                    "desc" => "He's the One True Manager.",
                    "img" => "nic"
                ),
                array(
                    "name" => "Pingu",
                    "job" => "Accountant",
                    "desc" => "He will NOOT make any mistakes.",
                    "img" => "pingu"
                ),
                array(
                    "name" => "Chef",
                    "job" => "Master Chef",
                    "desc" => "Chef is the name, cooking is the game.",
                    "img" => "chef"
                ),
                array(
                    "name" => "Caitlyn",
                    "job" => "Waitress",
                    "desc" => "She's a frosty one.",
                    "img" => "bae"
                ),
                array(
                "name" => "Rick Astley",
                "job" => "Host",
                "desc" => "He will never let you down.",
                "img" => "king"
                )
            );

    //FOOD
    $foodSections = array
        (
            "Starters","Main Course","Dessert"
        );

    $foodItems = array
        (
            "starters" => array
                    (
                        "breadsticks" => array
                                (
                                    "name" => "Breadsticks",
                                    "price" => 6,
                                    "info" => "Crispy on the outside, soft and chewy on the inside. Seasoned with garlic and parmesan and served with marinara dipping sauce.",
                                    "img" => "breadsticks"
                                ),

                        "bruschetta" => array
                                (
                                    "name" => "Bruschetta",
                                    "price" => 4,
                                    "info" => "Chopped fresh tomatoes with garlic, basil, olive oil, and vinegar, served on toasted slices of French or Italian bread",
                                    "img" => "bruschetta"
                                ),
                        "soup" => array
                                (
                                    "name" => "Soup of the Day",
                                    "price" => 5,
                                    "info" => "Our soup menu changes daily, but one thing never does: great taste!",
                                    "img" => "soup"
                                ),

                        "garlicbread" => array
                                (
                                    "name" => "Garlic Bread",
                                    "price" => 4,
                                    "info" => "Slices of French or Italian bread spread with garlic-seasoned butter and heated in the oven until crisp",
                                    "img" => "garlicbread"
                                )

                    ),
            "main_course" => array
                    (
                        "margeritha" => array
                                (
                                    "name" => "Margeritha",
                                    "price" => 5,
                                    "info" => "Tomato sauce with mozzarella cheese, tomato chunks and oregano.",
                                    "img" => "margeritha"
                                ),
                        "funghi" => array
                                (
                                    "name" => "Funghi",
                                    "price" => 6.30,
                                    "info" => "Tomato sauce with mozzarella cheese and a generous serving of fresh mushrooms.<br>Recommended for Vegeterians.",
                                    "img" => "funghi"
                                ),
                        "bbqchicken" => array
                                (
                                    "name" => "BBQ Chicken ",
                                    "price" => 7.5,
                                    "info" => "Chicken with red onions, sweet corn, green peppers and mozzarella cheese on BBQ sauce base.",
                                    "img" => "bbqchicken"
                                ),
                        "capricciosa" => array
                                (
                                    "name" => "Capricciosa",
                                    "price" => 7,
                                    "info" => "Tomato sauce with ham, mushrooms, artichoke hearts, peas, eggs and mozzarella cheese.",
                                    "img" => "capricciosa"
                                ),
                        "hawaiian" => array
                                (
                                    "name" => "Hawaiian",
                                    "price" => 6.60,
                                    "info" => "Tomato sauce with mozzarella cheese, savoury ham and sweet pineapple.",
                                    "img" => "hawaiian"
                                ),
                        "meatpizza" => array
                                (
                                    "name" => "Meat Pizza",
                                    "price" => 7,
                                    "info" => "Pepperoni (salami), spicy beef, ham and spicy pork on tomato sauce base and topped with mozzarella cheese.",
                                    "img" => "meatpizza"
                                ),
                        "vegetarian" => array
                                (
                                    "name" => "Vegeterian",
                                    "price" => 5.70,
                                    "info" => "Tomato sauce with mozzarella cheese, mushrooms, green peppers, red onions and sweet corn.<br>Recommended for Vegeterians.",
                                    "img" => "vegetarian"
                                ),
                        "siciliana" => array
                                (
                                    "name" => "Siciliana",
                                    "price" => 6.90,
                                    "info" => "Tomato sauce with mozzarella cheese, capera, onions, olives and tuna.",
                                    "img" => "siciliana"
                                )
                    ),
            "dessert" => array
                    (
                        "applepie" => array
                                (
                                    "name" => "Apple Pie",
                                    "price" => 3,
                                    "info" => "Looking for a sweet finish to your meal? Try our delicious Apple Pie! Tender apple slices and sweet cinnamon baked into a savoury crust.",
                                    "img" => "applepie"
                                ),
                        "crepe" => array
                                (
                                    "name" => "Crepe",
                                    "price" => 3.30,
                                    "info" => "These French crepes are thin and delicate pancakes that can be filled with anything you like, such as fresh fruit, chocolate sauce, and whipped cream.",
                                    "img" => "crepe"
                                ),
                        "scoops" => array
                                (
                                    "name" => "Ice-Cream Scoops",
                                    "price" => 2.50,
                                    "info" => "This cold, creamy and flavorful food taste, excites all senses for whoever tastes the delicacy. It is favorite of people young and old. A great treat to have in the heat of a summer day. Made mainly of frozen Cream and whipped in to perfection.",
                                    "img" => "scoops"
                                ),
                        "pancakes" => array
                                (
                                    "name" => "Pancakes",
                                    "price" => 4,
                                    "info" => "Try our delicious pancake or french toast dishes made with rich buttermilk and served with syrup.",
                                    "img" => "pancakes"
                                )

                    )
        );

function find_section($dish,$foodItems)
{
    foreach($foodItems as $dishtype => $dishes)
    {
        foreach($dishes as $dishes=>$plates)
        {
            if($dishes == $dish)
               return $dishtype;
        }
    }
}
?>

