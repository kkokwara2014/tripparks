<footer>
    <div class="container">
        <p>
            &copy; <script>
                document.write(new Date().getFullYear());
            </script> www.tripparks.com | All rights reserved
            {{-- &copy; www.tripparks.com 2019. All Rights Reserved. --}}
        </p>
        <ul class="list-inline">
            <li class="list-inline-item">
                <a href="#">Privacy</a>
            </li>
            <li class="list-inline-item">
                <a href="#">Terms</a>
            </li>
            <li class="list-inline-item">
                <a href="#">FAQ</a>
            </li>
        </ul>
    </div>
</footer>

<!-- Bootstrap core JavaScript -->
<script src="{{asset('bootstrap_assets/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('bootstrap_assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- Plugin JavaScript -->
<script src="{{asset('bootstrap_assets/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

<!-- Custom scripts for this template -->
<script src="{{asset('bootstrap_assets/js/new-age.min.js')}}"></script>

<script>
    window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 5000);
</script>

<script>
    $(document).ready(function(){
        // Add minus icon for collapse element which is open by default
        $(".collapse").each(function(){
            $(this).prev(".card-header").find(".fa").addClass("fa-minus").removeClass("fa-plus");
        });
        
        // Toggle plus minus icon on show hide of collapse element
        $(".collapse").on('show.bs.collapse', function(){
            $(this).prev(".card-header").find(".fa").removeClass("fa-plus").addClass("fa-minus");
        }).on('hide.bs.collapse', function(){
            $(this).prev(".card-header").find(".fa").removeClass("fa-minus").addClass("fa-plus");
        });
    });
</script>

</body>

</html>