<div <?php if($_GET['show_login_modal']){echo 'class="show"';} ?> id="sign-in-modal">
        <div class="sign-in-modal-top">
            <img src="images/logo.png" alt="">
            <button onclick="toggleSignIn()">X</button>
        </div>

        <div class="sign-in-modal-bottom sign-in">
            <img src="images/sign-in.png" alt="">
            <h3 class="mt1"><em>Sign in</em> or create an account</h3>
            <form id="sign-in-form" method="POST" action="bridge-login" class="mt1">
                <div>
                    <label for="email">Email</label>
                    <input 
                        type="text"
                        name="email"
                        placeholder="Email">
                </div>
                <div>
                    <label for="password">Password</label>
                    <input 
                        type="password"
                        name="password"
                        placeholder="Password">
                </div>
                <button class="mt1">Sign in</button>
                <p class="error">Incorrect email or password</p>
            </form>
            <p class="mt1">Don't have an account yet? <a href="#" onclick="toggleSignUp()">Sign up!</a></p>
        </div>

        <div class="sign-in-modal-bottom sign-up hide">
            <img src="images/sign-in.png" alt="">
            <h3 class="mt1">Sign in or <em>create an account</em></h3>
            <form id="sign-up-form" class="mt1" onsubmit="validate(signUp); return false">
                <div>
                    <label for="user name">User name</label>
                    <span>Min <?= _USER_NAME_MIN_LEN ?> and max <?= _USER_NAME_MAX_LEN ?> characters</span>
                    <input 
                        type="text"
                        name="user_name"
                        placeholder="User name"
                        data-validate="str"
                        data-min="<?= _USER_NAME_MIN_LEN ?>"
                        data-max="<?= _USER_NAME_MAX_LEN ?>">
                </div>
                <div>
                    <label for="user email">Email</label>
                    <input 
                        type="text"
                        name="user_email"
                        placeholder="Email"
                        data-validate="email"
                        onblur="isEmailAvailable()"
                        onfocus="clearInput()">
                    <span id="email-error" class="error">Email is already in use</span>
                </div>
                <div>
                    <label for="user password">Password</label>
                    <span>Minimum <?= _USER_PASSWORD_MIN_LEN ?> characters)</span>   
                    <input 
                        type="password"
                        name="user_password"
                        placeholder="Password"
                        data-validate="str"
                        data-min="8"
                        data-max="20">
                </div>
                <div>
                    <label for="user_password_confirm">Confirm password</label>
                    <input 
                        type="password"
                        name="user_password_confirm"
                        placeholder="Confirm password"
                        data-validate="match"
                        data-match-name="user_password">
                </div>
                <button class="mt1">Sign up</button>
            </form>
            <p class="mt1">Already have an account? <a href="#" onclick="toggleSignUp()">Sign in!</a></p>
            
        </div>
    </div>