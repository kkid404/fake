<div class="modals">
            
<div class="modals__overlay">
                <div class="modal modal__log" data-target="log">
                    <h3 class="modal__header heading__fonts">Log in</h3>
                    
                    <form method="post" class="log__form">
                        <label for="email_auth"> email:</label>
                        <input type="email" id="email_auth" 
                        class="email_auth input__form" name="email">                        
                        <label for="auth_password"> password:</label>
                        <input type="password" id="auth_password" 
                        class="password input__form" name="password">
                        
                        <div class="btns__log">
                            <input name="log" class="btn__style btn__log" 
                            type="submit" value="Log in">
                            <button class="btn__style btn__log btn__close">Cancel</button>
                        </div>
                    
                    </form>
                </div>
                
                <div class="modal modal__sign" data-target="sign">
                <h3 class="modal__header heading__fonts">Create account</h3>
                    
                <form method="post" class="log__form">
                        <label for="name"> name:</label>
                        <input type="name" id="name" 
                        class="name input__form" name="name">
                        <label for="email"> email:</label>
                        <input type="email" id="email" 
                        class="email input__form" name="email">
                        <label for="password"> password:</label>
                        <input type="password" id="password" 
                        class="password input__form" name="password">
                        <label for="confirm_password"> confirm password:</label>
                        <input type="password" id="confirm_password" 
                        class="password input__form" name="password_confirm"> 
                        
                        <div class="btns__log">
                            <input name="register" class="btn__style btn__log" 
                            type="submit" value="Create">
                            <button class="btn__style btn__log btn__close">Cancel</button>
                        </div>
                    
                    </form>
                </div>
            </div>
        </div>