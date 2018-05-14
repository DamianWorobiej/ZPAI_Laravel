<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
<head>
    <title>Laravel Boilerplate | Documentation</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">    
    <link rel="shortcut icon" href="../favicon.ico">  
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <!-- Global CSS -->
    <link rel="stylesheet" href="../assets/plugins/bootstrap/css/bootstrap.min.css">   
    <!-- Plugins CSS -->    
    <link rel="stylesheet" href="../assets/plugins/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="../assets/plugins/prism/prism.css">
    <link rel="stylesheet" href="../assets/plugins/lightbox/dist/ekko-lightbox.min.css">
    <link rel="stylesheet" href="../assets/plugins/elegant_font/css/style.css">

    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="../assets/css/styles.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
</head> 

<body class="body-pink">
    <div class="page-wrapper">
        <!-- ******Header****** -->
        <header id="header" class="header">
            <div class="container">
                <div class="branding">
                    <h1 class="logo">
                        <a href="../../index.html">
                            <span aria-hidden="true" class="icon_documents_alt icon"></span>
                            <span class="text-highlight">Laravel</span><span class="text-bold">Boilerplate</span>
                        </a>
                    </h1>
                </div><!--//branding-->
                <ol class="breadcrumb">
                    <li><a href="../../index.html">Home</a></li>
                    <li class="active">Documentation</li>
                </ol>
            </div><!--//container-->
        </header><!--//header-->
        <div class="doc-wrapper">
            <div class="container">
                <div id="doc-header" class="doc-header text-center">
                    <h1 class="doc-title"><span aria-hidden="true" class="icon icon_puzzle_alt"></span> Documentation</h1>
                    <div class="meta"><i class="fa fa-clock-o"></i> Last updated: November 20th, 2017</div>
                </div><!--//doc-header-->
                <div class="doc-body">
                    <div class="doc-content">
                        <div class="content-inner">
                            <section id="events" class="doc-section">
                                <h2 class="section-title">Events</h2>
                                <div class="section-block">
                                    <p>There are many events that are fired throughout the applications lifecycle if they meet the requirements.</p>

                                    <p>A current list of events fired are:</p>

                                    <p><strong>Frontend</strong></p>
                                    <ul>
                                        <li>UserConfirmed</li>
                                        <li>UserLoggedIn</li>
                                        <li>UserLoggedOut</li>
                                        <li>UserRegistered</li>
                                        <li>UserProviderRegistered</li>
                                    </ul>

                                    <p><strong>Backend</strong></p>
                                    <ul>
                                        <li>UserCreated</li>
                                        <li>UserDeactivated</li>
                                        <li>UserDeleted</li>
                                        <li>UserPasswordChanged</li>
                                        <li>UserPermanentlyDeleted</li>
                                        <li>UserReactivated</li>
                                        <li>UserRestored</li>
                                        <li>UserUpdated</li>
                                        <li>UserConfirmed</li>
                                        <li>UserUnconfirmed</li>
                                        <li>UserSocialDeleted</li>
                                        <li>RoleCreated</li>
                                        <li>RoleDeleted</li>
                                        <li>RoleUpdated</li>
                                    </ul>

                                    <p>The event stubs are found in the <strong>app\Events</strong> directory and are registered in the <a href="#providers">EventServiceProvider</a> using the <a href="https://laravel.com/docs/master/events#event-subscribers" target="_blank">Event Subscriber</a> feature of Laravel.</p>

                                    <p>The event listeners are found in the <strong>app\Listeners</strong> directory.</p>

                                    <div id="frontend-subscribers" class="section-block">
                                        <h3 class="block-title">Subscribers</h3>
                                        <p>Currently, all the subscriber events do is log when the user performs the event being fired. This is meant to be extended by you to do whatever you want.</p>
                                    </div><!--frontend-subscribers-->

                                    <p>The events are fired using the Laravel <strong>event()</strong> helper throughout the application.</p>

                                    <p>When the event helper is called with the event class, the objects needed to process the event are passed through, which are caught in the constructor of the Event classes themselves, and passed through to the listener as a property on the $event variable. (This is default Laravel behavior and not specific to this application).</p>
                                </div><!--//section-block-->
                            </section><!--//doc-section-->     

                            <section id="exceptions" class="doc-section">
                                <h2 class="section-title">Exceptions</h2>
                                <div class="section-block">
                                    <p>Besides the default PHP Exception class, there is one custom exception that gets thrown called <strong>GeneralException</strong>.</p>

                                    <p>This exception does nothing special except act as a way to change the default exception functionality when calling it.</p>

                                    <p>Any custom exceptions live in the <strong>app\Exceptions</strong> directory.</p>

                                    <p>Anytime you throw this exception, it will not display a "Whoops" error. Instead, it will take the error into a session variable and redirect the user to the previous page and display the message in a bootstrap danger alert box.</p>

                                    <p>If a regular PHP Exception is thrown, it will still get caught and the default functionality will takeover.</p>

                                    <p>Example order of events would be:</p>

                                    <ol>
                                        <li>User tries to delete the administrator account.</li>
                                        <li>Repository says this is not allowed and throws a GeneralException with the text explaining the reason.</li>
                                        <li>The Handler class catches the exception and redirects the user back with old input.</li>
                                        <li>A session variable called flash_danger is set with the exception text.</li>
                                        <li>The page is rendered and a file called <a href="#flash-messages">messages.blade.php</a> checks for this session variable, and displays the proper bootstrap alert with the provided text.</li>   
                                    </ol>

                                    <p><strong>Note:</strong> The <strong>withFlashDanger($text)</strong> is some Laravel magic that is parsed into <strong>with('flash_danger', $text)</strong>. This functionality exists in many places around the Laravel Framework.</p>

                                    <p><strong>Note:</strong> In the case of the request classes, the default functionality when validation fails is to redirect back with errors:</p>

                                    <p><a href="https://laravel.com/docs/master/validation#creating-form-requests" target="_blank">From the Laravel Documentation:</a></p>

                                    <p><em>"If validation fails, a redirect response will be generated to send the user back to their previous location. The errors will also be flashed to the session so they are available for display. If the request was an AJAX request, a HTTP response with a 422 status code will be returned to the user including a JSON representation of the validation errors."</em></p>
                                </div><!--//section-block-->
                            </section><!--//doc-section-->    

                            <section id="breadcrumbs" class="doc-section">
                                <h2 class="section-title">Breadcrumbs</h2>
                                <div class="section-block">
                                    <p>The breadcrumb links in the backend are managed by the <a href="http://github.com/davejamesmiller/laravel-breadcrumbs" target="_blank">davejamesmiller/laravel-breadcrumbs</a> package.</p>

                                    <p>The parts to this package integrated are:</p>

                                    <ul>
                                        <li>The <strong>config\breadcrumbs.php</strong> file which tells the system which view file to use for the rendering.</li>
                                        <li>The <strong>views\backend\includes\partials\breadcrumbs.blade.php</strong> file which renders the links.</li>
                                        <li><a
                                                href="https://github.com/rappasoft/laravel-5-boilerplate/blob/master/resources/views/backend/layouts/app.blade.php#L34" target="_blank">The call</a> to render the breadcrumbs.</li>
                                        <li>The breadcrumb files located in <strong>routes/breadcrumbs</strong>.</li>
                                        <li>The <strong>resources/views/backend/includes/partials/breadcrumbs.php</strong> file that the plugin looks for to render the links.</li>
                                    </ul>

                                    <p>Whenever you add new routes to your project, you must add breadcrumb files to go along with them to have them rendered, it is not automatic. Use the existing files for reference.</p>
                                </div><!--//section-block-->
                            </section><!--//doc-section-->    

                            <section id="composers" class="doc-section">
                                <h2 class="section-title">Composers</h2>
                                <div class="section-block">
                                    <p>The <strong>app\Http\Composers</strong> directory holds all <a href="https://laravel.com/docs/5.5/views#view-composers" target="_blank">view composers</a>.</p>

                                    <p>There are 2 composers that ship with the boilerplate:</p>

                                    <ul>
                                        <li><strong>GlobalComposer</strong>: Variables sent to every view.</li>
                                        <li><strong>SidebarComposer</strong>: Variables sent to views containing a sidebar.</li>
                                    </ul>

                                    <p>The composer classes themselves are registered in the <strong>app\Providers\ComposerServiceProvider</strong> class.</p>

                                    <p>The <strong>GlobalComposer</strong> binds the variable <strong>$logged_in_user</strong> to every view.</p>

                                    <p>If the user is logged in, it will be an <strong>app\Models\Auth\User</strong> object, if they are not it will be <strong>false</strong>.</p>
                                </div><!--//section-block-->
                            </section><!--//doc-section-->    

                            <section id="routes" class="doc-section">
                                <h2 class="section-title">Routes</h2>
                                <div class="section-block">
                                    <p>The only stock route file modified is <strong>routes\web.php</strong></p>

                                    <p>Lets look at <strong>web.php</strong>, line by line:</p>

                                    <div class="code-block">
                                        <pre><code class="language-php">Route::get('lang/{lang}', 'LanguageController@swap');</code></pre>
                                    </div><!--//code-block-->

                                    <p>The first line gets envoked anytime the user chooses a language from the language picker dropdown. The LanguageController's swap method switches the language code in the session and refreshes the page for it to take effect.</p>

                                    <hr/>

                                    <div class="code-block">
                                        <pre><code class="language-php">Route::group(['namespace' => 'Frontend', 'as' => 'frontend.'], function () {
    includeRouteFiles(__DIR__ . '/frontend/');
});</code></pre>
                                    </div><!--//code-block-->

                                    <p>This section registers all of the frontend routes, such as login, register, etc.</p>

                                    <p><strong>Key Points:</strong></p>

                                    <ul>
                                        <li><strong>The namespaces of the routes indicate the folder structure.</strong> In the above case the routes that will be included live in <strong>routes\frontend</strong>.</li>
                                        <li>The <strong>as</strong> property prepends the value to all routes inside
                                            the closure, so in the above case all included route names will be prepended with <strong>frontend.</strong>.</li>
                                        <li>The <strong>includeRouteFiles()</strong> is a helper function located in <strong>app\helpers.php</strong> and autoloaded by composer. (Learn about the <a href="#helpers">helpers here</a>). This takes all files in the specified directory and includes them in the closure so you can add new routes without having to touch the <strong>web.php</strong> routes file.</li>
                                    </ul>

                                    <hr/>

                                    <div class="code-block">
                                        <pre><code class="language-php">Route::group(['namespace' => 'Backend', 'prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'admin'], function () {
    includeRouteFiles(__DIR__ . '/backend/');
});</code></pre>
                                     </div><!--//code-block-->
                                </div><!--//section-block-->

                                <p>This section registers all of the backend routes, such as admin dashboard, user management, etc.</p>

                                <p>It is nearly identical as the frontend routes with the addition of the <strong>admin middleware and prefix</strong>.</p>

                                <p><strong>Key Points:</strong></p>

                                <ul>
                                    <li><strong>The namespaces of the routes indicate the folder structure.</strong> In the above case the routes that will be included live in <strong>routes\backend</strong>.</li>
                                    <li>The <strong>as</strong> property prepends the value to all routes inside the
                                        closure, so in the above case all included route names will be prepended with <strong>admin.</strong>.</li>
                                    <li>The <strong>prefix</strong> property prepends the value before all of the URL's
                                        of the routes inside the closure, so in the above case all route URL's will be prepended with <strong>admin/</strong>.</li>
                                    <li>The <strong>includeRouteFiles()</strong> is a helper function located in <strong>app\helpers.php</strong> and autoloaded by composer. (Learn about the <a href="#helpers">helpers here</a>). This takes all files in the specified directory and includes them in the closure so you can add new routes without having to touch the <strong>web.php</strong> routes file.</li>
                                    <li>The <strong>admin</strong> middleware is specified in <strong>app\Http\Kernel.php</strong> and states that anyone trying to access the routes in the following closure must:
                                        <ul>
                                            <li>Be logged in</li>
                                            <li>Have the <strong>view-backend</strong> permission associated with one of their roles or by itself.</li>
                                        </ul>
                                    </li>
                                </ul>

                                <p><strong>Note:</strong> Administrator should get all permissions so you do not have to specify the administrator role everywhere.</p>

                                <p><strong>Note: Most route resources use Laravel's <a href="https://laravel.com/docs/master/routing#route-model-binding" target="_blank">Route/Model Binding</a> which you will see as well in the controller methods.</strong>

                                <p>For more information about the <strong>permission</strong> middleware included in the <strong>admin</strong> middleware, see <a href="#middleware">middleware</a> and <a href="#access-control">Access Control</a>.
                            </section><!--//doc-section-->  

                            <section id="controllers" class="doc-section">
                                <h2 class="section-title">Controllers</h2>
                                <div class="section-block">
                                    <p>All of the controllers live in the default Laravel controller location of <strong>app\Http\Controllers</strong> and follow a namespacing convention of the folders they're in.</p>

                                    <p>The controllers are very clean, so there is not much to say, some key points and different sections to read about are:</p>

                                    <ul>
                                        <li>All controller methods use injected <a href="#requests">Request Classes</a> to both validate and act as a second security check after the middleware.</li>
                                        <li>All database logic is extracted out to <a href="#repositories">Repositories</a>.</li>
                                        <li>Controllers are only comprised of CRUD methods, any other methods have been extracted to other controllers for cleanliness.</li>
                                        <li>Any data table has its own dedicated controller.</li>
                                        <li>Any data being bound or returned to views are using Laravel <a
                                                href="#magic-methods">magic</a> with() method just like elsewhere in the application.
                                            <ul>
                                                <li>Example: <strong>withUser($user)</strong> is converted to <strong>with('user', $user)</strong></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div><!--//section-block-->
                            </section><!--//doc-section-->    

                            <section id="middleware" class="doc-section">
                                <h2 class="section-title">Middleware</h2>
                                <div class="section-block">
                                    <p>Laravel Boilerplate ships with 4 additional middleware out of the box.</p>

                                    <ul>
                                        <li><a class="scrollto" href="#localization-middleware">LocaleMiddleware</a></li>
                                        <li><a class="scrollto" href="#routeNeedsRole">Role</a></li>
                                        <li><a class="scrollto" href="#routeNeedsPermission">Permission</a></li>
                                        <li><a class="scrollto" href="#password-expires">PasswordExpires</a></li>
                                    </ul>

                                    <p>There is also one extra middleware group:</p>

                                    <ul>
                                        <li><a href="#middleware-groups">Middleware Groups</a></li>
                                    </ul>

                                    <div id="localization-middleware" class="section-block">
                                        <h3 class="block-title">LocaleMiddleware</h3>
                                        <p>The LocaleMiddleware is appended to the web middleware stack and runs on each request.</p>

                                        <p>It takes care of:</p>

                                        <ul>
                                            <li>Checking to see if localization is turned on in the config file.</li>
                                            <li>Setting the session locale code.</li>
                                            <li>Setting the PHP locale code.</li>
                                            <li>Setting the Carbon library locale code.</li>
                                            <li>Checking to see if the required language is a "Right-to-Left" language and sets a session variable to be used elsewhere in the system.</li>
                                        </ul>
                                    </div><!--//section-block-->

                                    <div id="routeNeedsRole" class="section-block">
                                        <h3 class="block-title">Role</h3>
                                        <p>The Role middleware is the default role middleware used by the <a href="https://github.com/spatie/laravel-permission" target="_blank">spatie permission package</a>.</p>
                                    </div><!--//section-block-->

                                    <div id="routeNeedsPermission" class="section-block">
                                        <h3 class="block-title">Permission</h3>
                                        <p>The Permission middleware is the default permission middleware used by the <a href="https://github.com/spatie/laravel-permission" target="_blank">spatie permission package</a>.</p>
                                    </div><!--//section-block-->

                                    <div id="password-expires" class="section-block">
                                        <h3 class="block-title">PasswordExpires</h3>
                                        
                                        <p>The password expires middleware forces the user to change their password after X number of days if specified in the access config file's password_expires_days property. You can disable it by setting it to false.</p>
                                    </div><!--//section-block-->

                                    <div id="middleware-groups" class="section-block">
                                        <h3 class="block-title">Middleware Groups</h3>
                                        <p>Laravel Boilerplate currently ships with one additional middleware group called <strong>admin</strong>.</p>

                                        <p>The <strong>admin</strong> middleware is specified in <strong>app\Http\Kernel.php</strong> and states that anyone trying to access the routes in the following closure must:</p>

                                        <ul>
                                            <li>Be logged in</li>
                                            <li>Have the <strong>view-backend</strong> permission associated with one of their roles.</li>
                                            <li>Be subject to being forced to change your password after X number of days.</li>
                                        </ul>

                                        <p>It currently wraps all backend routes by default.</p>

                                        <p><strong>Note:</strong> If you remove the admin middleware from the backend routes, anyone will be able to access the backend unless you specify elsewhere.</p>
                                    </div><!--//section-block-->
                                </div><!--//section-block-->
                            </section><!--//doc-section-->        

                            <section id="requests" class="doc-section">
                                <h2 class="section-title">Requests</h2>
                                <div class="section-block">
                                    <p>Any controller method throught the application that either needs validation or a security check, will have its own injected Request class.</p>

                                    <p>App requests are stored in the <strong>app\Http\Request</strong> folder and their namespaces match the folder structure.</p>

                                    <div id="example-request" class="section-block">
                                        <h3 class="block-title">Example Request</h3>

                                        <p>We are going to look at the <strong>store</strong> method of the <strong>app\Http\Controllers\Backend\Auth\User\UserController</strong> to see what's going on.</p>

                                        <div class="code-block">
                                            <pre><code class="language-php">public function store(StoreUserRequest $request)
{
    $this->userRepository->create($request->only(
        'first_name',
        'last_name',
        'email',
        'password',
        'timezone',
        'active',
        'confirmed',
        'confirmation_email',
        'roles',
        'permissions'
    ));

    return redirect()->route('admin.auth.user.index')->withFlashSuccess(__('alerts.backend.users.created'));
}</code></pre>
                                        </div><!--//code-block-->

                                        <p>Disregard what's inside the method and instead look at the parameter list.</p>

                                        <p>The StoreUserRequest is being injected to the controller, you do not have to do anything as it is parsed by Laravel automatically, and before the code inside the method even runs.</p>

                                        <p>The request itself looks like this:</p>

                                        <div class="code-block">
                                            <pre><code class="language-php">class StoreUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return $this->user()->isAdmin();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'first_name'     => 'required|max:191',
            'last_name'  => 'required|max:191',
            'email'    => ['required', 'email', 'max:191', Rule::unique('users')],
            'timezone' => 'required|max:191',
            'password' => 'required|min:6|confirmed',
            'roles' => 'required|array',
        ];
    }
}</code></pre>
                                        </div><!--//code-block-->

                                        <p>As you can see it does two things:</p>

                                        <ul>
                                            <li>It make sure the user is an administrator.</li>
                                            <li>It validates the incoming request.</li>
                                        </ul>

                                        <p>If the authorization fails the user will be redirected back with a message stating they do not have the required permissions.</p>

                                        <p>If the validation fails the default Laravel functionality takes over which is:</p>

                                        <p><em>
                                            "If validation fails, a redirect response will be generated to send the user back to their previous location. The errors will also be flashed to the session so they are available for display. If the request was an AJAX request, a HTTP response with a 422 status code will be returned to the user including a JSON representation of the validation errors."
                                        </em></p>
                                    </div><!--//section-block-->

                                    <p>Any controller method that needs to validate data or permission should use a request class for an extra layer of security.</p>

                                    <hr />

                                    <p><strong>Note:</strong> This project uses more general permissions for CRUD operations, meaning the default requests for a <strong>manage-users</strong> permission would be:</p>

                                    <ul>
                                        <li>ManageUserRequest - for any requests that do not have validation but want to assure the user can <strong>manage-users</strong></li>
                                        <li>StoreUserRequest - for creating a user and assuring the user can <strong>manage-users</strong></li>
                                        <li>UpdateUserRequest - for updating a user and assuring the user can <strong>manage-users</strong></li>
                                    </ul>

                                    <p>If you were to get more granular, and have separate permissions for all stages of CRUD, you may have controller methods that are injecting the following request classes:</p>

                                    <ul>
                                        <li>ViewUserRequest - auth()->can('view-users')</li>
                                        <li>StoreUserRequest - auth()->can('store-users')</li>
                                        <li>EditUserRequest - auth()->can('edit-users')</li>
                                        <li>UpdateUserRequest - auth()->can('update-users')</li>
                                        <li>DeleteUserRequest - auth()->can('delete-users')</li>
                                    </ul>

                                    <hr />

                                    <p>Learn more about Laravel request classes <a href="https://laravel.com/docs/5.3/validation#form-request-validation" target="_blank">here</a>.</p>
                                </div><!--//section-block-->
                            </section><!--//doc-section-->    

                            <section id="models" class="doc-section">
                                <h2 class="section-title">Models</h2>
                                <div class="section-block">
                                    <p>Models in Laravel Boilerplate live in the <strong>app\Models</strong> directory instead of the root for organizational purposes.</p>

                                    <p>The folder structure of the Model indicates its namespace as always.</p>

                                    <p>The majority of the models share the same characteristics:</p>

                                    <ul>
                                        <li>The <strong>$table</strong> property houses the table name, whether static or pulling from a config file.</li>
                                        <li>The <strong>$fillable</strong> property defines the columns that can be mass assigned. This is preferred over guarded as it is more specific.</li>
                                        <li>Some models have a <strong>$hidden</strong> property to hide certain information from being displayed, in such ways as in an API.</li>
                                        <li>Some models have a <strong>$dates</strong> property to cast certain columns as Carbon objects, such as when using the Laravel SoftDeletes trait.</li>
                                        <li>Many models have traits that extend or include other functionality, see below.</li>
                                    </ul>

                                    <div id="model-attributes" class="section-block">
                                        <h3 class="block-title">Attributes</h3>
                                        
                                        <p>If a model has any custom attributes, they are held as traits in an Attributes folder of the current model directory.</p>

                                        <p>This is also where the system builds the action buttons for each object type, if applicable. <a href="#action-buttons">See Action Buttons</a>.
                                    </div><!--//section-block-->

                                    <div id="model-relationships" class="section-block">
                                        <h3 class="block-title">Relationships</h3>
                                        
                                        <p>If a model has any relationships, they are held as traits in an Relationships folder of the current model directory.</p>
                                    </div><!--//section-block-->

                                    <div id="model-scopes" class="section-block">
                                        <h3 class="block-title">Scopes</h3>
                                        
                                        <p>If a model has any scopes, they are held as traits in an Scopes folder of the current model directory.</p>
                                    </div><!--//section-block-->
                                </div><!--//section-block-->
                            </section><!--//doc-section-->       

                            <section id="notifications" class="doc-section">
                                <h2 class="section-title">Notifications</h2>
                                <div class="section-block">
                                    <p>Laravel Boilerplate ships with a few Models that utilize the <strong>Notifiable</strong> trait, and in turn there are a few notifications that get sent.</p>

                                    <ul>
                                        <li>UserNeedsConfirmation - Send when a user registers and email confirmation is on.</li>
                                        <li>UserNeedsPasswordReset- Send when the user requests a password reset.</li>
                                    </ul>

                                    <p>All notifications are stored in the <strong>app\Notifications</strong> directory by default.</p>

                                    <p>All notifications are self-explanatory, for more information view the <a href="https://laravel.com/docs/master/notifications" target="_blank">Laravel Documentation</a>.</p>
                                </div><!--//section-block-->
                            </section><!--//doc-section-->    

                            <section id="providers" class="doc-section">
                                <h2 class="section-title">Providers</h2>
                                <div class="section-block">
                                    <p>Service Providers are classes that sort of "bootstrap" your application. Laravel ships with many, there are some new ones, and some default ones have been modified.</p>

                                    <ul>
                                        <li><a class="scrollto" href="#AppServiceProvider">AppServiceProvider</a> - Modified</li>
                                        <li>AuthServiceProvider - Untouched</li>
                                        <li><a class="scrollto" href="#BladeServiceProvider">BladeServiceProvider</a> - New</li>
                                        <li>BroadcastServiceProvider - Untouched</li>
                                        <li><a class="scrollto" href="#ComposerServiceProvider">ComposerServiceProvider</a> - New</li>
                                        <li><a class="scrollto" href="#EventServiceProvider">EventServiceProvider</a> - Modified</li>
                                        <li><a class="scrollto" href="#RouteServiceProvider">RouteServiceProvider</a> - Modified</li>
                                    </ul>

                                    <div id="AppServiceProvider" class="section-block">
                                        <h3 class="block-title">AppServiceProvider</h3>
                                        
                                        <p>The following modifications have been made to the default AppServiceProvider:</p>

                                        <ul>
                                            <li>The boot method does the same checks as the <a href="#localization-middleware">LocalizationMiddleware</a> class.</li>
                                            <li>There is a conditional to check to see if the app is in production if
                                                you need to do anything specific such as force https.</li>
                                            <li>The register method has a conditional for local development where you can register service providers that you only need for local development, since there is no point in registering them in a production environment.</li>
                                        </ul>
                                    </div><!--//section-block-->

                                    <div id="BladeServiceProvider" class="section-block">
                                        <h3 class="block-title">BladeServiceProvider</h3>
                                        
                                        <p>The BladeServiceProvider registers any custom blade directives you want to be able to use in your blade files.</p>

                                        <p>Laravel Boilerplate ships with 1 non-access related blade extensions:</p>

                                        <ul>
                                            <li>A <strong>@langrtl</strong> directive, which checks to see if the current language in the session wants Right-to-Left support so you can update things accordingly.</li>
                                        </ul>
                                    </div><!--//section-block-->

                                    <div id="ComposerServiceProvider" class="section-block">
                                        <h3 class="block-title">ComposerServiceProvider</h3>
                                        
                                        <p>The ComposerServiceProvider registers any view composers the application needs.</p>
                                    </div><!--//section-block-->

                                    <div id="EventServiceProvider" class="section-block">
                                        <h3 class="block-title">EventServiceProvider</h3>
                                        
                                        <p>The EventServiceProvider is extended to use the <strong>$subscribers</strong> property to register the event listeners for the system.</p>
                                    </div><!--//section-block-->

                                    <div id="RouteServiceProvider" class="section-block">
                                        <h3 class="block-title">RouteServiceProvider</h3>
                                        
                                        <p>The only addition to the RouteServiceProvider is in the boot method.</p>

                                        <p>Since most of the controller/routes use Laravels <a href="https://laravel.com/docs/master/routing#route-model-binding" target="_blank">Route/Model</a> Binding, there is one instance where we need to specify a binding.</p>

                                        <p>We specify this binding for use in <a href="https://github.com/rappasoft/laravel-5-boilerplate/blob/master/routes/Backend/Access.php#L56" target="_blank">deleting/restoring</a> a user, because the binding needs to know to have to check for deleted users as well. If you get rid of this and just use the default user binding, it will fail because it's not checking for a user id that has a non-null deleted_at timestamp.</p>
                                    </div><!--//section-block-->
                                </div><!--//section-block-->
                            </section><!--//doc-section--> 

                            <section id="repositories" class="doc-section">
                                <h2 class="section-title">Repositories</h2>
                                <div class="section-block">
                                    <p>Repositories are a way of extracting database logic into their own classes so you can have slim easy to read controllers.</p>

                                    <p>Repositories are injected into any controller that needs them via the constructor, and are resolved out of the service container.</p>

                                    <p>You do not have to use repositories, or repository/contract patterns, but it is good to learn ways to better structure your code instead of having bloated controllers.</p>

                                    <p><strong>Key Points</strong></p>

                                    <ul>
                                        <li>Repositories extend a base repository class to get included helper methods</strong>.</li>
                                        <li>If you extend the base repository you must have a method called <strong>model()</strong> that returns the model that you will be working with.</li>
                                    </ul>
                                </div><!--//section-block-->
                            </section><!--//doc-section-->    

                            <section id="access-control" class="doc-section">
                                <h2 class="section-title">Access Control</h2>
                                <div class="section-block">
                                    <p>Role/Permission control has been replaced with <a href="https://github.com/spatie/laravel-permission" target="_blank">spatie/laravel-permission</a> in this version of the boilerplate.

                                    <p>Laravel Boilerplate ships with other access features as well:</p>

                                    <p><strong>Features:</strong></p>

                                    <ul>
                                        <li>Register/Login/Logout/Password Reset</li>
                                        <li>Third party login (Github/Facebook/Twitter/Google/Linked In/BitBucket)</li>
                                        <li>Account Confirmation By E-mail</li>
                                        <li>Resend Confirmation E-mail</li>
                                        <li>Option for Manual Account Confirmation by Admin</li>
                                        <li>Login Throttling</li>
                                        <li>Enable/Disable Registration</li>
                                        <li>Force Single Session</li>
                                        <li>Clear User Session</li>
                                        <li>Administrator Management
                                            <ul>
                                                <li>User Index</li>
                                                <li>Activate/Deactivate Users</li>
                                                <li>Soft &amp; Permanently Delete Users</li>
                                                <li>Resend User Confirmation E-mails</li>
                                                <li>Change Users Password</li>
                                                <li>Create/Manage Roles</li>
                                                <li>Manage Users Roles/Permissions</li>
                                                <li>"Login As" User</li>
                                            </ul>
                                        </li>
                                    </ul>

                                    <ul>
                                        <li><a class="scrollto" href="#access-config">Configuration</a></li>
                                        <li><a class="scrollto" href="#access-middleware">Middleware</a></li>
                                    </ul>

                                    <div id="access-config" class="section-block">
                                        <h3 class="block-title">Configuration</h3>

                                        <div class="code-block">
                                            <pre><code class="language-php">/*
 * Application captcha specific settings
 */
'captcha' => [
    /*
     * Whether the registration captcha is on or off
     */
    'registration' => env('REGISTRATION_CAPTCHA_STATUS', false),
],

/*
 * Whether or not registration is enabled
 */
'registration' => env('ENABLE_REGISTRATION', true),

/*
 * Table names for access tables
 */
'table_names' => [
    'users' => 'users',
],

/*
 * Configurations for the user
 */
'users' => [
    /*
     * Whether or not the user has to confirm their email when signing up
     */
    'confirm_email' => env('CONFIRM_EMAIL', false),

    /*
     * Whether or not the users email can be changed on the edit profile screen
     */
    'change_email' => env('CHANGE_EMAIL', false),

    /*
     * The name of the super administrator role
     */
    'admin_role' => 'administrator',

    /*
     * The default role all new registered users get added to
     */
    'default_role' => 'user',

    /*
     * Whether or not new users need to be approved by an administrator before logging in
     * If this is set to true, then confirm_email is not in effect
     */
    'requires_approval' => env('REQUIRES_APPROVAL', false),

    /*
     * Login username to be used by the controller.
     */
    'username' => 'email',

    /*
     * Session Database Driver Only
     * When active, a user can only have one session active at a time
     * That is all other sessions for that user will be deleted when they log in
     * (They can only be logged into one place at a time, all others will be logged out)
     */
    'single_login' => true,

    /*
     * How many days before users have to change their passwords
     * false is off
     */
    'password_expires_days' => env('PASSWORD_EXPIRES_DAYS', 30),
],

/*
* Configuration for roles
*/
'roles' => [
    /*
     * Whether a role must contain a permission or can be used standalone as a label
     */
    'role_must_contain_permission' => true,
],

/*
 * Socialite session variable name
 * Contains the name of the currently logged in provider in the users session
 * Makes it so social logins can not change passwords, etc.
 */
'socialite_session_name' => 'socialite_provider',</code></pre>
                                        </div><!--//code-block-->
                                    </div><!--//section-block-->

                                    <div id="access-middleware" class="section-block">
                                        <h3 class="block-title">Middleware</h3>

                                        <p>Both permission middleware from the spatie/laravel-permission package are included in the project. Both of which throw an UnauthorizedException which is caught in the Exceptions/Handler.php file.</p>
                                    </div><!--//section-block-->
                                </div>
                            </section>         

                            <section id="blade-extensions" class="doc-section">
                                <h2 class="section-title">Blade Extensions</h2>
                                <div class="section-block">
                                    <p>See <a class="scrollto" href="#BladeServiceProvider">BladeServiceProvider</a>.</p>
                                </div><!--//section-block-->
                            </section><!--//doc-section-->  

                            <section id="localization" class="doc-section">
                                <h2 class="section-title">Localization</h2>
                                <div class="section-block">
                                    <p>Laravel Boilerplate comes in many languages, each language has it's own folder as usual, the language files are very well organized and indented.</p>

                                    <p>If you would like to contribute a language, please make a pull request based on the <a href="https://github.com/rappasoft/laravel-5-boilerplate/wiki/Localization" target="_blank">requirements</a>.</p>

                                    <p>The parts of the localization system are:</p>

                                    <ul>
                                        <li>The AppServiceProvider boot method</li>
                                        <li>The LocaleMiddleware</li>
                                        <li>The <a href="https://github.com/rappasoft/laravel-5-boilerplate/tree/master/resources/lang" target="_blank">language files</a></li>
                                        <li>The <a href="https://github.com/rappasoft/laravel-5-boilerplate/blob/master/resources/views/includes/partials/lang.blade.php" target="_blank">language dropdowns</a></li>
                                    </ul>

                                    <p>The language files try to be as organized as possible first by file name, then by keys frontend, backend, or global. Then by the 'type' they may be display, i.e. 'auth'. Please try to keep them organized if you are contributing to them on GitHub.</p>
                                </div><!--//section-block-->
                            </section><!--//doc-section-->    

                            <section id="helpers" class="doc-section">
                                <h2 class="section-title">Helpers</h2>
                                <div class="section-block">
                                    <div id="helper-classes"  class="section-block">
                                        <h3 class="block-title">Helper Classes</h3>
                                        
                                        <p>There are a few misc. helper classes we have written that we couldn't find a good place for, and didn't want messy controllers with so we extracted them out as <strong>Helper</strong> classes.</p>

                                        <p>They are located in the <strong>app\Helpers</strong> directory.</p>

                                        <p>Any helpers that were deemed useful globally throughtout the application have folders in the root, and helpers that were to specific to a section have <strong>Frontend</strong> or <strong>Backend</strong> folders like many other places throughout the file structure.</p>
                                    </div><!--//section-block-->

                                    <div id="helper-globals"  class="section-block">
                                        <h3 class="block-title">Helper Globals</h3>
                                        
                                        <p>There is an <strong>app\helpers.php</strong> file which is autoloaded with composer that registers a few global functions for your convenience.</p>

                                        <hr />

                                        <h4>app_name()</h4>

                                        <div class="code-block">
                                            <pre><code class="language-php">{{ app_name() }} returns the config app.name value.</code></pre>
                                        </div><!--//code-block-->

                                        <h4>gravatar()</h4>
                                        <p>Global function for the Gravatar:: facade.</p>

                                        <div class="code-block">
                                            <pre><code class="language-php">return gravatar()->get($user->email, ['size' => 50]);</code></pre>
                                        </div><!--//code-block-->

                                        <h4>include_route_files($folder)</h4>
                                        <p>Loops through a folder and requires all PHP files - <a class="scrollto" href="#routes">See Routes</a>.</p>

                                        <h4>home_route()</h4>
                                        <p>Gets the home route of the user based off of their authentication level.</p>

                                        <h4>style()</h4>
                                        <p>Include an HTML style call.</p>

                                        <h4>script()</h4>
                                        <p>Include an HTML javascript call.</p>

                                        <h4>form_cancel()</h4>
                                        <p>Creates a styled form cancel button that is used throughout.</p>

                                        <h4>form_submit()</h4>
                                        <p>Creates a styles form submit button that is used throughout.</p>

                                        <h4>get_user_timezone()</h4>
                                        <p>Gets the logged in users current timezone.</p>
                                    </div><!--//section-block-->
                                </div><!--//section-block-->
                            </section><!--//doc-section-->      

                            <section id="resources" class="doc-section">
                                <h2 class="section-title">Resources</h2>
                                <div class="section-block">
                                    <p>The <strong>resources</strong> section has the same high level folder structure as a default installation, with many new items inside:</p>

                                    <ul>
                                        <li><a class="scrollto" href="#resources-mix">webpack.mix.js</a></li>
                                        <li><a class="scrollto" href="#resources-assets">assets</a></li>
                                        <li><a class="scrollto" href="#resources-lang">lang</a></li>
                                        <li><a class="scrollto" href="#resources-views">views</a></li>
                                    </ul>

                                    <div id="resources-mix" class="section-block">
                                        <h3 class="block-title">webpack.mix.js</h3>

                                        <p>The webpack.mix.js file that ships with the project is well documented and pretty self-explanatory, it currently looks like:</p>

                                        <div class="code-block">
                                            <pre><code class="language-js">let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.sass('resources/assets/sass/frontend/app.scss', 'public/css/frontend.css')
    .sass('resources/assets/sass/backend/app.scss', 'public/css/backend.css')
    .js('resources/assets/js/frontend/app.js', 'public/js/frontend.js')
    .js([
        'resources/assets/js/backend/before.js',
        'resources/assets/js/backend/app.js',
        'resources/assets/js/backend/after.js'
    ], 'public/js/backend.js');

if(mix.inProduction){
    mix.version();
}</code></pre>
                                        </div><!--//code-block-->
                                    </div><!--//section-block-->    

                                    <div id="resources-assets" class="section-block">
                                        <h3 class="block-title">Assets</h3>
                                        
                                        <ul>
                                            <li><a class="scrollto" href="#resource-assets-js">js</a></li>
                                            <li><a class="scrollto" href="#resource-assets-sass">sass</a></li>
                                        </ul>

                                        <div id="resources-assets-js" class="section-block">
                                            <h4 class="block-title">JS</h4>

                                            <ul>
                                                <li><strong>/backend</strong> - Contains the backend specific (Core LTE) javascripts to be compiled.</li>
                                                <li><strong>/components</strong> - Contains the Vue components for backend and frontend.</li>
                                                <li><strong>/frontend</strong> - Contains the frontend specific javascripts to be compiled.</li>
                                                <li><strong>/plugin</strong> - Contains any javscript plugins that would be benificial globally.</li>
                                                <li><strong>bootstrap.js</strong> - The Laravel javascript bootstrap file.</li>
                                                <li><strong>plugins.js</strong> - Contains useful plugins and snippets that would be benificial globally.</li>
                                            </ul>
                                        </div><!--//section-block-->

                                        <div id="resources-assets-sass" class="section-block">
                                            <h4 class="block-title">Sass</h4>

                                            <ul>
                                                <li><strong>/backend</strong> - Contains backend .scss files (Core LTE) ready to be compiled into css.</li>
                                                <li><strong>/frontend</strong> - Contains frontend .scss files ready to be compiled into css.</li>
                                                <li><strong>/plugin</strong> - Contains plugin .scss files associated with the plugin folder in the <strong>js</strong> directory.</li>
                                                <li><strong>_helpers.scss</strong> - A place to put helper scss methods that can be used globally.</li>
                                            </ul>
                                        </div><!--//section-block-->
                                    </div><!--//section-block-->

                                    <div id="resources-lang" class="section-block">
                                        <h3 class="block-title">Lang</h3>
                                        
                                        <p>See <a class="scrollto" href="#Localization">Localization</a>.</p>
                                    </div><!--//section-block-->

                                    <div id="resources-views" class="section-block">
                                        <h3 class="block-title">Views</h3>
                                        
                                        <ul>
                                            <li><strong>/backend</strong> - The backend blade files.</li>
                                            <li><strong>/frontend</strong> - The frontend blade files</li>
                                            <li><strong>/includes</strong> - Blade files that are included in all master app layouts.</li>
                                            <li><strong>/vendor</strong> - Files generated from the vendor:publish command.</li>
                                        </ul>
                                    </div><!--//section-block-->
                                </div><!--//section-block-->
                            </section><!--//doc-section--> 

                            <section id="testing" class="doc-section">
                                <h2 class="section-title">Testing</h2>
                                <div class="section-block">
                                    <p>The test suite is currently comprised of over 100 tests and 500 assertions to test all of the sections in this documentation.</p>

                                    <p>We will not go into detail here since they change so often, but with a fresh installation everything should pass if you have the right configurations.</p>

                                    <p>To run the tests run <strong>phpunit</strong> from the command line in the root of the project.</p>

                                    <p><strong>Note:</strong> You will need to set up mail for all the tests to pass. I suggest a <a href="https://mailtrap.io" target="_blank">Mailtrap</a> account for testing.</p>
                                </div><!--//section-block-->
                            </section><!--//doc-section--> 

                            <section id="misc" class="doc-section">
                                <h2 class="section-title">Misc.</h2>

                                <div id="flash-messages"  class="section-block">
                                    <h3 class="block-title">Flash Messages</h3>
                                    
                                    <p>The <a href="https://github.com/rappasoft/laravel-5-boilerplate/blob/master/resources/views/includes/partials/messages.blade.php" target="_blank">messages.blade.php</a> file is included after the body of all master app layouts in this project, and takes care of displaying any errors from a session, validation, etc using bootstrap alert boxes.</p>

                                    <p>If not a validation error, or message bag error, then the following session variables are supported:</p>

                                    <ul>
                                        <li><strong>flash_success</strong> - Bootstrap <strong>alert-success</strong> box.</li>
                                        <li><strong>flash_warning</strong> - Bootstrap <strong>alert-warning</strong> box.</li>
                                        <li><strong>flash_info</strong> - Bootstrap <strong>alert-info</strong> box.</li>
                                        <li><strong>flash_danger</strong> - Bootstrap <strong>alert-danger</strong> box.</li>
                                        <li><strong>flash_message</strong> - Bootstrap <strong>alert</strong> box.</li>
                                    </ul>

                                    <p>You will see these used in many controller methods, or in <a href="#exceptions" class="scrollto">exception handling</a> except they use Laravel's <a href="#magic-methods">magic method</a> syntax.
                                </div><!--//section-block-->

                                <div id="magic-methods" class="section-block">
                                    <h3 class="block-title">Magic Methods</h3>
                                    
                                    <p>This application makes use of Laravel's magic methods in many places, especially controllers.</p>

                                    <p>For example, you may see a controller return that looks like this:</p>

                                    <div class="code-block">
                                        <pre><code class="language-php">return redirect()->route('admin.auth.user.index')->withFlashSuccess(trans('alerts.backend.users.created'));</code></pre>
                                    </div><!--//code-block-->

                                    <p>or:</p>

                                    <div class="code-block">
                                        <pre><code class="language-php">return view('backend.auth.show')->withUser($user);</code></pre>
                                    </div><!--//code-block-->

                                    <p>In both of these examples you will see a compound function call, that doesn't exist in the documentation.</p>

                                    <ul>
                                        <li>withFlashSuccess</li>
                                        <li>withUser</li>
                                    </ul>

                                    <p>Laravel will convert both of these methods to a default <strong>with()</strong> method when it compiles, so both of the above examples will output the following code.</p>

                                    <div class="code-block">
                                        <pre><code class="language-php">return redirect()->route('admin.auth.user.index')->with('flash_success', trans('alerts.backend.users.created'));</code></pre>
                                    </div><!--//code-block-->

                                    <p>or:</p>

                                    <div class="code-block">
                                        <pre><code class="language-php">return view('backend.auth.show')->with('user', $user);</code></pre>
                                    </div><!--//code-block-->

                                    <p>Both methods work, but I think the magic makes it more elegant so I use that throughout.</p>
                                </div><!--//section-block-->

                                <div id="action-buttons" class="section-block">
                                    <h3 class="block-title">Action Buttons</h3>
                                    
                                    <p>Anywhere throughout the system that there is a table that allows CRUD operations, with associated buttons, the buttons (called <strong>action buttons</strong>) are held within a trait on the model.</p>

                                    <p>We use this approach to make it easy to output buttons for each resource without having duplicate markup in multiple places, plus it takes care of the entity ID's and other stuff, such as converting all <strong>delete</strong> buttons for links that trigger a form instead of a form themselves. (This uses a method included in the global javascript plugin file.)</p>

                                    <p>For example the buttons to the right of the users table in the backend, are generated in <a href="https://github.com/rappasoft/laravel-5-boilerplate/blob/master/app/Models/Auth/Traits/Attribute/UserAttribute.php#L249" target="_blank">this trait</a>.</p>

                                    <div class="code-block">
                                        <pre><code class="language-php">public function getShowButtonAttribute()
{
    return '&lt;a href="' . route('admin.auth.user.show', $this) . '" class="btn btn-xs btn-info">&lt;i class="fa fa-search" data-toggle="tooltip" data-placement="top" title="' . trans('buttons.general.crud.view') . '">&lt;/i&gt;&lt;/a&gt; ';
}</code></pre>
                                    </div><!--//code-block-->

                                    <p>This outputs the <strong>show</strong> button for each user row in the table with their respective ID and looks like this <img src="../assets/images/attributes/show.png" />.</p>

                                    <p>On interesting button to look at is the delete button:</p>

                                    <div class="code-block">
                                        <pre><code class="language-php">public function getDeleteButtonAttribute()
{
    if ($this->id != auth()->id()) {
        return '&lt;a href="' . route('admin.auth.user.destroy', $this) . '"
             data-method="delete"
             data-trans-button-cancel="' . trans('buttons.general.cancel') . '"
             data-trans-button-confirm="' . trans('buttons.general.crud.delete') . '"
             data-trans-title="' . trans('strings.backend.general.are_you_sure') . '"
             class="btn btn-xs btn-danger">&lt;i class="fa fa-trash" data-toggle="tooltip" data-placement="top" title="' . trans('buttons.general.crud.delete') . '"&gt;&lt;/i&gt;&lt;/a&gt; ';
    }

    return '';
}</code></pre>
                                    </div><!--//code-block-->

                                    <p>Ignoring the if statement for this example, you can see that the delete button is actually a link. But that's insecure, isn't it? Actually no, take note of the <strong>data-method="delete"</strong> property of the link.</p>

                                    <p>If you look at the source of the delete button you will see this:</p>

                                    <div class="code-block">
                                        <pre><code class="language-markup">&lt;a data-method="delete" data-trans-button-cancel="Cancel" data-trans-button-confirm="Delete" data-trans-title="Are you sure?" class="btn btn-xs btn-danger" style="cursor:pointer;" onclick="$(this).find(&quot;form&quot;).submit();">&lt;i class="fa fa-trash" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"&gt;&lt;/i&gt;
&lt;form action="http://l5boilerplate.dev/admin/access/user/1" method="POST" name="delete_item" style="display:none"&gt;
   &lt;input type="hidden" name="_method" value="delete"&gt;
   &lt;input type="hidden" name="_token" value="YOUR_CSRF_TOKEN"&gt;
&lt;/form&gt;
&lt;/a&gt;</code></pre>
                                    </div><!--//code-block-->

                                    <p>Because of <a href="https://github.com/rappasoft/laravel-5-boilerplate/blob/master/resources/assets/js/plugins.js#L11" target="_blank">this function</a>, all <strong>data-method="delete"</strong> property get a form injected inside them that calls a DELETE route, it also takes care of popping up an "are you sure you want to delete?" alert box before resuming.</p>

                                    <p><strong>Note:</strong> The other data-* methods on the link take care of injecting the appropriate language into the sweetalert alert box that pops up which looks like this:</p>

                                    <div class="screenshot-holder" style="max-width:300px">
                                        <a href="../assets/images/attributes/delete.png" data-title="Delete Alert Box" data-toggle="lightbox" class="hoverZoomLink"><img class="img-responsive" src="../assets/images/attributes/delete.png" alt="screenshot"></a>
                                        <a class="mask hoverZoomLink" href="../assets/images/attributes/delete.png" data-title="Delete Alert Box" data-toggle="lightbox"><i class="icon fa fa-search-plus"></i></a>
                                    </div><br/>

                                    <p><strong>Finally</strong> each attribute trait has a last method called <strong>getActionButtonsAttribute()</strong> which concatinates all of the button methods together and displays all of the buttons at once like:</p>

                                    <div class="code-block">
                                        <pre><code class="language-php">$user->action_buttons</code></pre>
                                    </div><!--//code-block-->

                                    <p>Displays: (Actual look may vary between versions)</p>

                                    <p><img src="../assets/images/attributes/action_buttons.png" /></p>

                                    <p><strong>Note:</strong> The <strong>getActionButtonsAttribute()</strong> method is another example of <a href="https://laravel.com/docs/master/eloquent-mutators#defining-an-accessor" target="_blank">Laravel magic</a>.</p>
                                </div><!--//section-block-->

                                <div id="socialite" class="section-block">
                                    <h3 class="block-title">Socialite</h3>
                                    
                                    <p>To configure socialite, add your credentials to your .env file. The redirects must follow the convention <strong>http://mysite.com/login/SERVICE</strong>. Available services are <strong>github, facebook, linkedin, bitbucket, twitter, and google</strong>. The links on the login page are generated based on which credentials are provided in the .env file.</p><br/>

                                    <h4>BitBucket</h4>
                                    <p>You must set permissions of your OAuth consumer to at least <strong>Account: Read</strong> and <strong>Repositories: Read</strong></p>

                                    <p><strong>Also:</strong> In order for this option to work, <strong>email</strong> must be <strong>nullable</strong> on the <strong>users</strong> table, as well as the <strong>unique email table key</strong> removed. Do this at your own risk. There is no other option I know of for now.</p><br/>

                                    <h4>GitHub</h4>
                                    <p>No known quirks, should work as is.</p><br/>

                                    <h4>Google</h4>
                                    <p>If you are getting an <strong>Access Not Configured</strong> error message:</p>

                                    <p>Activate the <strong>Google+ API</strong> from the Google Developers Console.</p><br/>

                                    <h4>Facebook</h4>
                                    <p><strong>For the Given URL is not allowed by the Application error message:</strong></p>

                                    <ol>
                                        <li>Go to basic settings for your app</li>
                                        <li>Select Add Platform</li>
                                        <li>Select Website</li>
                                        <li>Put URL in the Site URL</li>
                                    </ol><br/>

                                    <h4>Linked In</h4>
                                    <p><strong>r_basicprofile</strong> and <strong>r_emailaddress</strong> must be selected in <strong>Default Application Permissions</strong>.</p>

                                    <p>The callback URL must be submitted under the <strong>OAuth 2.0</strong> section.</p><br/>

                                    <h4>Twitter</h4>
                                    <p>For Twitter to grab the user's email address for you application, it must be whitelisted as explained here: <a href="https://dev.twitter.com/rest/reference/get/account/verify_credentials" target="_blank">https://dev.twitter.com/rest/reference/get/account/verify_credentials</a></p><br/>

                                    <h4>Other</h4>
                                    <p>If you are getting a <strong>cURL error 60</strong> on localhost, follow <a href="http://stackoverflow.com/questions/28635295/laravel-socialite-testing-on-localhost-ssl-certificate-issue" target="_blank">these directions</a>.</p>
                                </div><!--//section-block-->

                                <div id="troubleshooting" class="section-block">
                                    <h3 class="block-title">Troubleshooting</h3>
                                    
                                    <p>If for any reason something goes wrong, try each of the following:</p>

                                    <p>Delete the <strong>composer.lock</strong> file</p>

                                    <p>Run the <strong>dumpautoload</strong> command</p>

                                    <div class="code-block">
                                        <pre><code class="language-php">$ composer dumpautoload -o</code></pre>
                                    </div><!--//code-block-->

                                    <p>If the above fails to fix, and the command line is referencing errors in compiled.php, do the following:</p>

                                    <p>Delete the <strong>storage/framework/compiled.php</strong> file</p>

                                    <p>If all of the above don't work please <a href="https://github.com/rappasoft/Laravel-5-Boilerplate/issues" target="_blank">report here</a>.</p>
                                </div><!--//section-block-->

                                <div id="deployment" class="section-block">
                                    <h3 class="block-title">Deployment</h3>
                                    
                                    <p>When pushing your app to production, you should make sure you run the following:</p><br/>

                                    <h4>yarn prod</h4>
                                    <p>Compress all of you assets into a single file specified in <a href="https://github.com/rappasoft/laravel-5-boilerplate/blob/master/webpack.mix.js" target="_blank">webpack.mix.js.</a></p><br/>

                                    <h4><a href="https://laravel.com/docs/master/configuration#configuration-caching" target="_blank">Config Caching</a> php artisan config:cache</h4>
                                    <p>Caches all of your configuration files into a single file.</p><br/>

                                    <h4><a href="https://laravel.com/docs/master/controllers#route-caching" target="_blank">Route Caching</a> php artisan route:cache</h4>
                                    <p>If your application is exclusively using controller based routes, you should take advantage of Laravel's route cache. Using the route cache will drastically decrease the amount of time it takes to register all of your application's routes. In some cases, your route registration may even be up to 100x faster!</p>
                                </div><!--//section-block-->
                            </section><!--//doc-section-->                        
                        </div><!--//content-inner-->
                    </div><!--//doc-content-->
                    
                    <div class="doc-sidebar">
                        <nav id="doc-nav">
                            <ul id="doc-menu" class="nav doc-menu hidden-xs" data-spy="affix">
                                <li><a class="scrollto" href="#events">Events</a></li>
                                <li><a class="scrollto" href="#exceptions">Exceptions</a></li>
                                <li><a class="scrollto" href="#breadcrumbs">Breadcrumbs</a></li>
                                <li><a class="scrollto" href="#composers">Composers</a></li>
                                <li><a class="scrollto" href="#routes">Routes</a></li>
                                <li><a class="scrollto" href="#controllers">Controllers</a></li>
                                <li>
                                    <a class="scrollto" href="#middleware">Middleware</a>
                                    <ul class="nav doc-sub-menu">
                                        <li><a class="scrollto" href="#localization-middleware">LocaleMiddleware</a></li>
                                        <li><a class="scrollto" href="#routeNeedsRole">Role</a></li>
                                        <li><a class="scrollto" href="#routeNeedsPermission">Permission</a></li>
                                        <li><a class="scrollto" href="#password-expires">PasswordExpires</a></li>
                                        <li><a class="scrollto" href="#middleware-groups">Middleware Groups</a></li>
                                    </ul><!--//nav-->
                                </li>
                                <li>
                                    <a class="scrollto" href="#requests">Requests</a>
                                    <ul class="nav doc-sub-menu">
                                        <li><a class="scrollto" href="#example-request">Example Request</a></li>
                                    </ul><!--//nav-->
                                </li>
                                <li>
                                    <a class="scrollto" href="#models">Models</a>
                                    <ul class="nav doc-sub-menu">
                                        <li><a class="scrollto" href="#model-attributes">Attributes</a></li>
                                        <li><a class="scrollto" href="#model-relationships">Relationships</a></li>
                                        <li><a class="scrollto" href="#model-scopes">Scopes</a></li>
                                    </ul><!--//nav-->
                                </li>
                                <li><a class="scrollto" href="#notifications">Notifications</a></li>
                                <li>
                                    <a class="scrollto" href="#providers">Providers</a>
                                    <ul class="nav doc-sub-menu">
                                        <li><a class="scrollto" href="#AppServiceProvider">AppServiceProvider</a></li>
                                        <li><a class="scrollto" href="#BladeServiceProvider">BladeServiceProvider</a></li>
                                        <li><a class="scrollto" href="#ComposerServiceProvider">ComposerServiceProvider</a></li>
                                        <li><a class="scrollto" href="#EventServiceProvider">EventServiceProvider</a></li>
                                       <li><a class="scrollto" href="#RouteServiceProvider"> RouteServiceProvider</a></li>
                                    </ul><!--//nav-->
                                </li>
                                <li><a class="scrollto" href="#repositories">Repositories</a></li>
                                <li>
                                    <a class="scrollto" href="#access-control">Access Control</a>
                                    <ul class="nav doc-sub-menu">
                                        <li><a class="scrollto" href="#access-config">Configuration</a></li>
                                        <li><a class="scrollto" href="#access-middleware">Middleware</a></li>
                                    </ul><!--//nav-->
                                </li>
                                <li><a class="scrollto" href="#blade-extensions">Blade Extensions</a></li>
                                <li><a class="scrollto" href="#localization">Localization</a></li>
                                <li>
                                    <a class="scrollto" href="#helpers">Helpers</a>
                                    <ul class="nav doc-sub-menu">
                                        <li><a class="scrollto" href="#helper-classes">Classes</a></li>
                                        <li><a class="scrollto" href="#helper-globals">Globals</a></li>
                                    </ul><!--//nav-->
                                </li>
                                <li>
                                    <a class="scrollto" href="#resources">Resources</a>
                                    <ul class="nav doc-sub-menu">
                                        <li><a class="scrollto" href="#resources-mix">webpack.mix</a></li>
                                        <li><a class="scrollto" href="#resources-assets">Assets</a></li>
                                        <li><a class="scrollto" href="#resources-lang">Lang</a></li>
                                        <li><a class="scrollto" href="#resources-views">Views</a></li>
                                    </ul><!--//nav-->
                                </li>
                                <li><a class="scrollto" href="#testing">Testing</a></li>
                                <li>
                                    <a class="scrollto" href="#misc">Misc.</a>
                                    <ul class="nav doc-sub-menu">
                                        <li><a class="scrollto" href="#flash-messages">Flash Messages</a></li>
                                        <li><a class="scrollto" href="#magic-methods">Magic Methods</a></li>
                                        <li><a class="scrollto" href="#action-buttons">Action Buttons</a></li>
                                        <li><a class="scrollto" href="#socialite">Socialite</a></li>
                                        <li><a class="scrollto" href="#troubleshooting">Troubleshooting</a></li>
                                        <li><a class="scrollto" href="#deployment">Deployment</a></li>
                                    </ul><!--//nav-->
                                </li>
                            </ul><!--//doc-menu-->
                        </nav>
                    </div><!--//doc-sidebar-->
                </div><!--//doc-body-->              
            </div><!--//container-->
        </div><!--//doc-wrapper-->
        
    </div><!--//page-wrapper-->
    
    <footer class="footer text-center">
        <div class="container">
            <!--/* This template is released under the Creative Commons Attribution 3.0 License. Please keep the attribution link below when using for your own project. Thank you for your support. :) If you'd like to use the template without the attribution, you can check out other license options via our website: themes.3rdwavemedia.com */-->
            <small class="copyright">Designed with <i class="fa fa-heart"></i> by <a href="http://themes.3rdwavemedia.com/" target="_blank">Xiaoying Riley</a> for developers.</small>

            <small class="copyright">Created by <a href="http://www.rappasoft.com" target="_blank">Anthony Rappa</a> and made perfect by an <a href="https://github.com/rappasoft/laravel-5-boilerplate/graphs/contributors" target="_blank">amazing community of people.</a></small>
            
        </div><!--//container-->
    </footer><!--//footer-->
     
    <!-- Main Javascript -->          
    <script type="text/javascript" src="../assets/plugins/jquery-1.12.3.min.js"></script>
    <script type="text/javascript" src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../assets/plugins/prism/prism.js"></script>    
    <script type="text/javascript" src="../assets/plugins/jquery-scrollTo/jquery.scrollTo.min.js"></script>  
    <script type="text/javascript" src="../assets/plugins/lightbox/dist/ekko-lightbox.min.js"></script>
    <script type="text/javascript" src="../assets/plugins/jquery-match-height/jquery.matchHeight-min.js"></script>
    <script type="text/javascript" src="../assets/js/main.js"></script>
</body>
</html> 