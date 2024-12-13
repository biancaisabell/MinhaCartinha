<?php



if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $nome = isset($_POST['nome']) ? htmlspecialchars($_POST['nome']) : '';
    $idade = isset($_POST['idade']) ? htmlspecialchars($_POST['idade']) : '';
    $comportamento = isset($_POST['comportamento']) ? htmlspecialchars($_POST['comportamento']) : '';
    $cor = isset($_POST['cor']) ? htmlspecialchars($_POST['cor']) : '';
    $acredita = isset($_POST['acredita']) ? htmlspecialchars($_POST['acredita']) : '';
    $data = isset($_POST['data']) ? htmlspecialchars($_POST['data']) : '';
    $email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '';
    $senha = isset($_POST['senha']) ? htmlspecialchars($_POST['senha']) : '';

    if (isset($_POST['presente']) && is_array($_POST['presente'])) {
        $presentes = implode(", ", $_POST['presente']);
    } else {
        $presentes = "Nenhum presente selecionado";
    }


    $outro_presente = isset($_POST['outrot']) ? htmlspecialchars($_POST['outrot']) : "Nenhum outro presente especificado";

  
    echo "<h1>Dados Recebidos</h1>";
    echo "<p><strong>Nome Mágico:</strong> $nome</p>";
    echo "<p><strong>Idade:</strong> $idade anos</p>";
    echo "<p><strong>Comportamento:</strong> $comportamento</p>";
    echo "<p><strong>Presentes desejados:</strong> $presentes</p>";
    echo "<p><strong>Outro presente (especificado):</strong> $outro_presente</p>";
    echo "<p><strong>Cor favorita:</strong> $cor</p>";
    echo "<p><strong>Acredita no Papai Noel (escala):</strong> $acredita</p>";
    echo "<p><strong>Data desejada para o presente:</strong> $data</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Senha:</strong> *** (oculta para segurança)</p>";

    if (isset($_FILES['img']) && $_FILES['img']['error'] === 0) {
        $image = $_FILES['img'];
        echo "<p><strong>Imagem do presente:</strong> " . htmlspecialchars($image['name']) . " (tamanho: " . $image['size'] . " bytes)</p>";
    } else {
        echo "<p><strong>Imagem do presente:</strong> Nenhuma imagem enviada.</p>";
    }
} else {
    echo "<p>O formulário não foi enviado corretamente.</p>";
}
?>