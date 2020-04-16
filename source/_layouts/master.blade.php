<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        @yield('title')
        {{ !empty($__env->yieldContent('title')) ? ' | ' : '' }}
        {{ $page->site->title }}
    </title>

    @include('_partials.head.favicon')
    @include('_partials.head.meta')
    @include('_partials.cms.identity_widget')

    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
</head>
<body>
    <header>
        <nav>
            <strong>{{ $page->site->title }}</strong><br>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/posts">Posts</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <article>
        <section>
            @yield('content')
        </section>
    </article>

    <footer>
        <small>
            This project is maintained by <a href="https://raniesantos.netlify.com">Ranie Santos</a>.
            View the <a href="https://github.com/raniesantos/artisan-static">GitHub repo</a>.
        </small>
    </footer>

    <script src="{{ mix('js/main.js', 'assets/build') }}"></script>
    @includeWhen($page->production, '_partials.analytics')
    @include('_partials.cms.identity_redirect')

    <script>
	var beamer_config = {
		product_id : 'ZrgeHHvO20277', //DO NOT CHANGE: This is your product code on Beamer
		//selector : 'selector', /*Optional: Id, class (or list of both) of the HTML element to use as a button*/
		//display : 'right', /*Optional: Choose how to display the Beamer panel in your site*/
		//top: 0, /*Optional: Top position offset for the notification bubble*/
		//right: 0, /*Optional: Right position offset for the notification bubble*/
		//bottom: 0, /*Optional: Bottom position offset for the notification bubble*/
		//left: 0, /*Optional: Left position offset for the notification bubble*/
		//button_position: 'bottom-right', /*Optional: Position for the notification button that shows up when the selector parameter is not set*/
		//icon: 'bell_lines', /*Optional: Alternative icon to display in the notification button*/
		//language: 'EN', /*Optional: Bring news in the language of choice*/
		filter: 'SANDBOX', /*Optional : Bring the news for a certain role as well as all the public news*/
		//lazy: false, /*Optional : true if you want to manually start the script by calling Beamer.init()*/
		//alert : true, /*Optional : false if you don't want to initialize the selector*/
		//delay : 0, /*Optional : Delay (in milliseconds) before initializing Beamer*/
		//embed : false, /*Optional : true if you want to embed and display the feed inside the element selected by the 'selector' parameter*/
		//mobile : true, /*Optional : false if you don't want to initialize Beamer on mobile devices*/
		//notification_prompt : 'sidebar', /*Optional : override the method selected to prompt users for permission to receive web push notifications*/
		//callback : your_callback_function, /*Optional : Beamer will call this function, with the number of new features as a parameter, after the initialization*/
		//onclick : your_onclick_function(url, openInNewWindow), /*Optional : Beamer will call this function when a user clicks on a link in one of your posts*/
		//onopen : your_onopen_function, /*Optional : Beamer will call this function when opening the panel*/
		//onclose : your_onclose_function, /*Optional : Beamer will call this function when closing the panel*/
		//---------------Visitor Information---------------
		user_firstname : "SANDBOX", /*Optional : Input your user firstname for better statistics*/
		user_lastname : "Guest", /*Optional : Input your user lastname for better statistics*/
		//user_email : "email", /*Optional : Input your user email for better statistics*/
        //user_id : "user_id" /*Optional : Input your user ID for better statistics*/
        roll: 'GUEST'
	};
</script>
<script type="text/javascript" src="https://app.getbeamer.com/js/beamer-embed.js" defer="defer"></script>

</body>
</html>
