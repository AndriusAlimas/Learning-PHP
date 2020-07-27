<style>
    html{
        position: relative;
        min-height: 100%;
    }
    
    body{
        margin-bottom: 100px;
    }
    .footer{
        position: absolute;
        bottom: 0;
        width: 100%;
        background-color: #dcdcda;
        height: 60px;
    }
</style>

<footer class="footer">
    <div class="container">
        <p class="text-muted">
        <?php
            $today = date("Y");
            echo "Copyright &copy; 2010-$today";
        ?>    
        </p>
    </div>
</footer>