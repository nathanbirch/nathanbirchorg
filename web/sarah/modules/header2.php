
<div class="NavGradient theTop">
    <table class="headerTable">
        <tr>
            <td><a href="http://www.nathanbirch.org" class=""><button type="button" class="btn btn-info wbutton">Website Home</button></a></td>
            <td>
                <a href="/" class=""><button type="button" class="btn btn-info wbutton">Blog Home</button></a>
                <a href="/sarah/pages/aboutMeSarah.php" class=""><button type="button" class="btn btn-info wbutton">About Me</button></a>
                <!-- <br class="desktop-break"><br class="desktop-break"> -->
                <a href="/sarah/pages/blogList.php" class=""><button type="button" class="btn btn-info wbutton">All Blog Entries</button></a>
                <a href="/sarah/pages/photoGallery.php" class=""><button type="button" class="btn btn-info wbutton">Photo Gallery</button></a>
            </td>
            <td ng-show="!hideLoginButton">
                <a href="/pages/register/"><input type='hidden' name='action' value='sign_up'><button type="button" class="btn btn-info wbutton" style="background-color:#00CC66">Sign Up</button></a>
                <br><br>
                <a href="/pages/register/"><input type='hidden' name='action' value='login'><button type="button" class="btn btn-info wbutton" style="background-color:#00CC66">Login</button></a>
            </td>
            <td ng-show="hideLoginButton">
                Welcome <span ng-bind="">Guest</span>
            </td>
        </tr>
    </table>
    <div class="headerTableMobile">
        <a href="http://www.nathanbirch.org" class=""><button type="button" class="btn btn-info wbutton">Website Home</button></a>

        <a href="/" class=""><button type="button" class="btn btn-info wbutton">Blog Home</button></a>

        <a href="/sarah/pages/aboutMeSarah.php" class=""><button type="button" class="btn btn-info wbutton">About Me</button></a>
        <br class="mobile-break">
        <a href="/sarah/pages/blogList.php" class=""><button type="button" class="btn btn-info wbutton">All Blog Entries</button></a>

        <a href="/sarah/pages/photoGallery.php" class=""><button type="button" class="btn btn-info wbutton">Photo Gallery</button></a>
        <br class="mobile-break"><br class="mobile-break">
        <div ng-show="!hideLoginButton">
            <a href="/pages/register/"><input type='hidden' name='action' value='sign_up'><button type="button" class="btn btn-info wbutton" style="background-color:#00CC66">Sign Up</button></a>
            <a href="/pages/register/"><input type='hidden' name='action' value='login'><button type="button" class="btn btn-info wbutton" style="background-color:#00CC66">Login</button></a></td>
        </div>
        <div ng-show="hideLoginButton">
            Welcome <span ng-bind="">Guest</span>
        </div>
    </div>
</div>
<script src="/scripts/analytics.js"></script>
