   <?PHP
    header("Content-type:text/html;charset=utf-8");
    echo "用户名:" . $_ENV["JAE_MYSQL_USERNAME"] ."</br>";
    echo "密码:" .$_ENV["JAE_MYSQL_PASSWORD"] . "</br>";
    echo "IP:" . $_ENV["JAE_MYSQL_IP"] ."</br>";
    echo "数据库编码:" .$_ENV["JAE_MYSQL_ENCODING"] . "</br>";
    echo "端口:" .$_ENV["JAE_MYSQL_PORT"] . "</br>";
    echo "数据库名称:" .$_ENV["JAE_MYSQL_DBNAME"] . "</br>";
    ?>
