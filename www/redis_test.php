<?php
try {
    $redis = new Redis();
    $redis->connect('redis', 6379);
    echo "Conexión a Redis: OK<br>";
    
    $redis->set("test_key", "Hola desde Redis!");
    $value = $redis->get("test_key");
    echo "Valor recuperado de Redis: " . $value;
} catch (Exception $e) {
    echo "Error de conexión a Redis: " . $e->getMessage();
}
?>