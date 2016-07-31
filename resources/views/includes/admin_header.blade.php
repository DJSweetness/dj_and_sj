<header>
    <nav class="header_nav">
        <ul>
            Welcome <a href="{{ route('admin.index') }}">Home</a><?php 
                                                                    if (strpos(Request::url(), 'artwork'))
                                                                    {
                                                                         echo ', SJ.';
                                                                    }
                                                                ?>
        </ul>
    </nav>
</header>