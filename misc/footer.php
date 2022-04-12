    <div class="footer-container">
        Desenvolvido por: <b><a href="https://github.com/f4dul" target="_blank">Evandro Fadul</a></b>
    </div>
    
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
    <script src="assets/js/jquery-flexdatalist-2.3.1/jquery.flexdatalist.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script>
        $('.flexdatalist').flexdatalist({
            searchContain: false,
            valueProperty: 'iso2',
            minLength: 1,
            focusFirstResult: true,
            selectionRequired: true,
            searchIn: 'name',
            data: 'complete.json'
        });
    </script>
</body>
</html>