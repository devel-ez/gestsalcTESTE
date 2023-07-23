// Função para carregar o conteúdo via AJAX
function loadContent(url) {
    $.ajax({
        url: url,
        type: 'GET',
        dataType: 'html',
        success: function (response) {
            // Extrai apenas o conteúdo da resposta, excluindo header e footer
            var content = $(response).find('.content').html();
            $('.content').html(content);
        },
        error: function (xhr, status, error) {
            console.error(xhr.responseText);
        }
    });
}

// Anexa um manipulador de evento de clique aos links do menu com a classe 'load-content'
$(document).ready(function () {
    $('.load-content').on('click', function (e) {
        e.preventDefault();
        var url = $(this).attr('href');
        loadContent(url);
        
    });
});