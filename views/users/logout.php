<?php
function clearSession()
{
    // clear $_SESSION array
    session_unset();

    // delete session data on the server
    session_destroy();

    // ensure client is sent a new session cookie
    session_regenerate_id();

    // start a new session - session_destroy() ended our previous session so
    // if we want to store any new data in $_SESSION we must start a new one
    session_start();
    header ('Location: ../ads.php');
    
}

?>

<div class="container view">
    <section id="login">
        <div class="row">
            <center><h1 class="section-title">Thanks For Visiting Kirkzay</h1></center>

            <!-- checks username and password, if incorrect throws an error -->

            <!-- checking to see if user is already signed in, if so success -->
           


        <div class="col-md-5 col-md-offset-5">
            <center><h3>Please Login to continue...</h3></center>
            

        <div class="row">
            <div class="col-sm-6">
                <button href="/login"type="submit" class="btn btn-warning">Login</button>
            </div>
            <div class="col-sm-6 text-right">
                <button href="/signup" type="GET" class="btn btn-success">Go To Signup</button>
            </div>

            <center><h4>Or check out the music that makes great Coders!</h4>
            <iframe src="https://embed.spotify.com/?uri=spotify%3Auser%3Amysqlfairchild%3Aplaylist%3A6dv7ioWsqn5KPYC7kXvnC2" width="300" height="380" frameborder="0" allowtransparency="true"></iframe></center>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
