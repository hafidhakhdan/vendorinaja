<!-- syarat fardhu a'in memulai ngoding web kalian adalah dengan memasukkan 3 fungsi ini (line 2-10) -->
<?= $this->extend('/Layout/base'); ?>

<?= $this->section('title'); ?>
<title>Help Center --- Vendorin.aja</title>
<?= $this->endSection('title'); ?>

<?= $this->section('custom_css'); ?>
<link rel="stylesheet" href="/assets/css/helpcenter.css">
<?= $this->endSection('custom_css'); ?>

<!-- section untuk kalian bermain dan belajar -->
<?= $this->section('content'); ?>
<!-- HELP CENTER -->
<main class="main-container">
    <section id="main-content" class="section hero">
        <div class="hero-inner">
            <h5 class="help-center">Help Center</h5>
            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" focusable="false" viewBox="0 0 12 12" class="search-iconb" aria-hidden="true">
                <circle cx="4.5" cy="4.5" r="4" fill="none" stroke="currentColor"></circle>
                <path stroke="currentColor" stroke-linecap="round" d="M11 11L7.5 7.5"></path>
            </svg>
            <form class="search search-full search-kb-fix" role="search" method="GET">
                <input type="search" id="query" name="query" placeholder="Search" autocomplete="off" aria-label="Search">
            </form>
        </div>
    </section>
    <section class="intro">

    </section>
    <section class="category-grid">
        <ul class="flex-container">
            <!-- Announcement -->
            <a href="">
                <li class="flex-item announcement">

                    <h2 class="title">Announcement</h2>
                    <hr>
                    <h3 class="description">We've got oure ear to the ground. Here's what you need to know.</h3>
                </li>
            </a>
            <!-- Account Settings -->
            <a href="">
                <li class="flex-item account-settings">

                    <h2 class="title">Account Settings</h2>
                    <hr>
                    <h3 class="description">You're a special snowflake and so is your account.</h3>
                </li>
            </a>
            <!-- Getting Started -->
            <a href="">
                <li class="flex-item getting-started">

                    <h2 class="title">Getting Started</h2>
                    <hr>
                    <h3 class="description">Start off on the right foot! Not the left one!</h3>
                </li>
            </a>
            <!-- Billing -->
            <a href="">
                <li class="flex-item billing">

                    <h2 class="title">Billing</h2>
                    <hr>
                    <h3 class="description">That feel when you look at your bank account.</h3>
                </li>
            </a>
            <!-- FAQs -->
            <a href="">
                <li class="flex-item faqs">

                    <h2 class="title">F.A.Qs</h2>
                    <hr>
                    <h3 class="description">All you can eat self-serve problem solving.</h3>
                </li>
            </a>
        </ul>
    </section>
    <section class="intro">
        <pre></pre>
        <h2 class="title">Other ways to find help.</h2>
    </section>
    <section class="category-grid">
        <ul class="flex-container">
            <!-- Support -->
            <a href="">
                <li class="flex-item twitter">
                    <h2 class="title">Twitter</h2>
                    <hr>
                    <h3 class="description">Have a quick question? Hit us up on Twitter!</h3>
                </li>
            </a>
        </ul>
    </section>
</main>
<?= $this->endSection('content'); ?>