<?php
require_once __DIR__ . '/../utils/helper_functions.php';
function pageController()
{
    // defines array to be returned and extracted for view
    $data = [];
    if(isset($_GET['id'])) {
      $item_id = $_GET['id'];
    }
    // finds position for ? in url so we can look at the url minus the get variables
    $get_pos = strpos($_SERVER['REQUEST_URI'], '?');
    // if a ? was found, cuts off get variables if not just gives full url
    if ($get_pos !== false)
    {
        $request = substr($_SERVER['REQUEST_URI'], 0, $get_pos);
    }
    else
    {
        $request = $_SERVER['REQUEST_URI'];
    }


    // switch that will run functions and setup variables dependent on what route was accessed
    switch ($request) {
        case '/':
            $main_view = '../views/home.php';
            $data['listing'] = Listing::featuredItems();
            break;
        case '/ads/create':

            $main_view = '../views/ads/create.php';
            break;
        case '/ads/edit':
            $main_view = '../views/ads/edit.php';
            if($_POST) {
            Save();
            }
            break;
        case '/ads':
            $main_view = '../views/ads/index.php';
            $data['listing'] = Listing::all();
            break;
        case '/ads/show':
            $data['listing'] = Listing::findByItem($item_id);
            $main_view = '../views/ads/show.php';
            break;
        case '/account':
            //redirectIfNotLoggedIn();
            // checkIfUserIdGiven();
            $data['user'] = User::find(Input::get('id'));
            $data['listing'] = $data['user']->listing();
            $main_view = '../views/users/account.php';
            break;
        case '/account/edit':
                if (Auth::id() == Input::get('id')) {
            $main_view = '../views/users/edit.php';
            //redirectIfNotLoggedIn();
            //checkIfUserIdGiven();
            editAccount();
            $data['user'] = User::find(Input::get('id'));
            } else {
              header("Location: /account/");
            }
            break;
        case '/account/login':
            //redirectIfLoggedIn();
            $main_view = '../views/users/login.php';
            break;
        case '/account/signup':
            $main_view = '../views/users/signup.php';
            // saveUser();
            break;
        default:    // displays 404 if route not specified above
            $main_view = '../views/404.php';
        break;
    }
    $data['main_view'] = $main_view;
    return $data;
}
extract(pageController());
