<x-includes.header />

<x-navbar />

<main class="register-page">
    <div class="register-page__sub-container">
        <h1>Register an account</h1>
        <form action="" method="post" class="register-page__form">
            @csrf
            <label for="username">Username</label>
            <input type="text" name="username" id="username" placeholder="Enter a username">

            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Enter your email">

            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Enter a unique password">

            <label for="password-confirmation">Password Again</label>
            <input type="password" name="password_confirmation" id="password-confirmation"
                   placeholder="Re-enter your unique password">

            <button type="submit" class="btn btn--success">Register</button>
        </form>
    </div>

</main>

<x-includes.footer />
