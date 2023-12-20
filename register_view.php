
<?php require("controller.php"); ?>


<form action = 'controller.php' method='POST'>
        <h3>Register</h3>

        <label for="username">Username</label>
        <input type="text" placeholder="Username" id="username" name = 'username'>

        <label for="email">Email</label>
        <input type="text" placeholder="Email" id="email" name ='email'>

        <label for="phone">Phone</label>
        <input type="text" placeholder="Phone number" id="phone" name ='phone'>

        <label for="password">Password</label>
        <input type="password" placeholder="Password" id="password" name = 'password'>

        
        <div class="submit">
            <input type="submit" name="submit" value='Register'></input>
        </div>
        
    </form>