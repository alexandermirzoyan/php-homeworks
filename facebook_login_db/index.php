<html>
    <head>
        <title>Facebook - log in or sign up</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    </head>
    <body>
        <header
            class="d-flex justify-content-around pb-2"
            style="background-color: #3b5998; color: white"
        >
            <div class="d-flex align-items-center" >
                <img style="width: 250px" src="./assets/facebook.png" alt="">
            </div>
            <div class="d-flex align-items-center mt-3" >
                <div class="d-flex flex-column mr-4 h-100" >
                    <label for="login">Email or phone</label>
                    <input id="login" type="text">
                </div>
                <div class="d-flex flex-column h-100" >
                    <label for="password">Password</label>
                    <input id="password" type="password">
                    <a>Forgotten password?</a>
                </div>
                <div>
                    <input
                        class="ml-3"
                        style="background-color: #4a7698; color: white; border: 1px solid grey"
                        type="submit"
                        value="Log in"
                    >
                </div>
            </div>
        </header>
        <div class="container">
            <div class="row" >
                <div class="col-7">
                    <div class="login-text mt-3">
                        <h2>Recent logins</h2>
                        <p>Click your picture or add an account.</p>
                    </div>
                    <div class="d-flex user-images" >
                        <?php
                            $user_names = ['Poxosyan Poxos', 'Manukyan Garnik', 'Ashotyan Vagharshak'];
                            for ($i = 0; $i < count($user_names); $i++) {
                                ?>
                                    <div class="card mr-2" style="width: 12rem;">
                                        <img class="card-img-top" src="assets/avatar.png" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title text-center"><?= $user_names[$i]?></h5>
                                        </div>
                                    </div>
                                <?php
                            }
                        ?>
                    </div>
                </div>
                <div class="col-5">
                    <div class="login-form mt-3">
                        <h2>Create a new account</h2>
                        <p>It's quick and easy.</p>
                    </div>
                    <div>
                        <form action="success.php" method="get">
                            <div class="name-surname-wrapper d-flex">
                                <input class="mr-3 form-control" name="firstname" type="text" placeholder="First name">
                                <input class="form-control" name="lastname" type="text" placeholder="Surname">
                            </div>
                            <div class="email">
                                <input class="mt-2 form-control" name="email" type="text" placeholder="Mobile number or email address">
                            </div>
                            <div class="password">
                                <input class="mt-2 form-control" name="password" type="password" placeholder="New password">
                            </div>
                            <div class="birthday mt-3" >
                                <p>Birthday</p>
                                <div class="birthdate" >
                                    <select name="day" id="day">
                                        <option value="day">Day</option>
                                        <?php
                                        for ($i = 1; $i <= 31; $i++) {
                                            echo "<option value='".$i."' >".$i."</option>";
                                        }
                                        ?>
                                    </select>
                                    <select name="month" id="month">
                                        <option value="month">Month</option>
                                        <?php
                                            $months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
                                            for ($i = 0; $i < count($months); $i++) {
                                                echo "<option value='".$months[$i]."' >".$months[$i]."</option>";
                                            }
                                        ?>
                                    </select>
                                    <select name="year" id="year">
                                        <option value="year">Year</option>
                                        <?php
                                        for ($i = 1900; $i <= 2020; $i++) {
                                            echo "<option value='".$i."' >".$i."</option>";
                                        }
                                        ?>
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="gender mt-3">
                                <p>Gender</p>
                                <div class="control">
                                    <label class="radio mr-2">
                                        <input type="radio" value="female" name="gender">Female
                                    </label>
                                    <label class="radio mr-2">
                                        <input type="radio" value="male" name="gender">Male
                                    </label>
                                    <label class="radio">
                                        <input type="radio" value="other" name="gender">Custom
                                    </label>
                                </div>
                            </div>
                            <div class="mt-3">
                                <p style="font-size: 0.8rem;">
                                    By clicking Sign Up, you agree to our Terms, Data Policy and Cookie Policy.
                                    You may receive SMS notifications from us and can opt out at any time.
                                </p>
                            </div>
                            <div class="submit">
                                <input
                                    style="width: 200px"
                                    type="submit"
                                    class="btn btn-success"
                                    value="Sign Up"
                                >
                            </div>
                            <hr>
                            <p>Create a Page for a celebrity, band or business.</p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
