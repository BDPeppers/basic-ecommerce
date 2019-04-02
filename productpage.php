<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>

<body>
    <header class="product-header">
        <h1>Fruit Shop</h1>
        <h1>Welcome, Whoever</h1>
        <!-- Somehow someway the user's name can be derived -->
        <a class="logout" href="index.php">Logout</a>
    </header>

    <div class="fruit-bar">
        <div class="bin">
            <img src="pics/apple.PNG">
            <div class="basket">
                    <a href="#" onclick="add('apple')" class="add-fruit">Add</a>
                    <a href="#" onclick="remove('apple')" class="remove-fruit">Remove</a>
            </div>
        </div>

        <div class="bin">
            <img src="pics/Pineapple.PNG">
            <div class="basket">
                <a href="#" onclick="add('pineapple')" class="add-fruit">Add</a>
                <a href="#" onclick="remove('pineapple')" class="remove-fruit">Remove</a>
            </div>
        </div>

        <div class="bin">
            <img src="pics/grapes.PNG">
            <div class="basket">
                <a href="#" onclick="add('grapes')" class="add-fruit">Add</a>
                <a href="#" onclick="remove('grapes')" class="remove-fruit">Remove</a>
            </div>
        </div>

        <div class="bin">
            <img src="pics/kiwi.PNG">
            <div class="basket">
                <a href="#" onclick="add('kiwi')" class="add-fruit">Add</a>
                <a href="#" onclick="remove('kiwi')" class="remove-fruit">Remove</a>
            </div>
        </div>

        <div class="bin">
            <img src="pics/orange.PNG">
            <div class="basket">
                <a href="#" onclick="add('orange')" class="add-fruit">Add</a>
                <a href="#" onclick="remove('orange')" class="remove-fruit">Remove</a>
            </div>
        </div>

        <div class="bin">
            <img src="pics/strawberry.PNG">
            <div class="basket">
                <a href="#" onclick="add('strawberry')" class="add-fruit">Add</a>
                <a href="#" onclick="remove('strawberry')" class="remove-fruit">Remove</a>
            </div>
        </div>
    </div>

    <div class="checkout">
        <div class="belt">
            <img id="apple" src="pics/apple.PNG" alt="apple">
            <img id="pineapple" src="pics/Pineapple.PNG" alt="pineapple">
            <img id="grapes" src="pics/grapes.PNG" alt="grapes">
            <img id="kiwi" src="pics/kiwi.PNG" alt="kiwi">
            <img id="orange" src="pics/orange.PNG" alt="orange">
            <img id="strawberry" src="pics/strawberry.PNG" alt="strawberry">
        </div>

        <div class="checkout-btn">
            <a href="#">Check Out</a>
        </div>


    </div>

</body>

<script>
// add fruit to cart
function add(fruit){
   document.getElementById(fruit).style.display = "block";
}

// remove from cart
function remove(fruit){
    document.getElementById(fruit).style.display = "none";
}

</script>

</html>