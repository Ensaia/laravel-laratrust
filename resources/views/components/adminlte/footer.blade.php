<footer class="app-footer">
    <div class="d-flex justify-content-between">
        <div>
            <strong>
                <a href="{{ route('dashboard') }}" class="text-decoration-none">
                    <img
                        src="{{ asset('images/laratrust-footer.png') }}"
                        alt="laratrust-footer"
                        class="footer-text"
                    />
                </a>
            </strong>
            <span style="color: rgba( 0, 0, 0, 0.50);">&nbsp;{{ date('Y') }}&copy;</span>
        </div>
        <div>
            <a href="#!" class="text-decoration-none footer-text">
                <span><i class="fa-brands fa-square-facebook fa-lg"></i></span>
            </a>
            <a href="#!" class="text-decoration-none footer-text">
                <span><i class="fa-brands fa-x-twitter fa-lg"></i></span>
            </a>
            <a href="#!" class="text-decoration-none footer-text">
                <span><i class="fa-brands fa-square-github fa-lg"></i></span>
            </a>
            <a href="#!" class="text-decoration-none footer-text">
                <span><i class="fa-brands fa-square-whatsapp fa-lg"></i></span>
            </a>
            <a href="#!" class="text-decoration-none footer-text">
                <span><i class="fa-brands fa-telegram fa-lg"></i></span>
            </a>
        </div>
    </div>
</footer>

<style>
    .footer-text{
        color: rgba( 0, 0, 0, 0.50);
    }
    .footer-text:hover{
        color: rgba( 0, 0, 0, 0.8);
    }
</style>
