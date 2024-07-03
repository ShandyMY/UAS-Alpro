<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sign In</title>
    <link rel="stylesheet" href="style0.css">
</head>
<body>
    <div class="main">
        <div class="content">
            <h1>Vacation  <br><span>With Travel & </span> <br>Explore The World</h1>
            <p class="par">Travel, perusahaan terkemuka di industri pariwisata, menyediakan berbagai tempat wisata yang  <br> menakjubkan di seluruh penjuru dunia, memungkinkan para pelanggan untuk menjelajahi  <br> keindahan alam, kekayaan budaya, dan pesona eksotis berbagai negara dengan pengalaman yang tak  <br> terlupakan.</p>

                <button class="cn"><a href="#">JOIN US</a></button>
                <form action="login.php" method="post">
                <div class="form">
                    <h2>Login Here</h2>
                    <?php if(isset($_GET['error'])){ ?>
                        <p class="error"><?php echo $_GET['error']; ?></p>
                    <?php } ?>
                    <input type="text" name="uname" placeholder="Enter Email Here">
                    <input type="password" name="password" placeholder="Enter Password Here">
                    <button type="submit" class="btnn"><a href="">Login</a></button>

                    <p class="link">Don't have an account<br>
                    <a href="register.php">Sign up </a> here</p>
                </div>
                </form>
        </div>
    </div>  
</body>
</html>