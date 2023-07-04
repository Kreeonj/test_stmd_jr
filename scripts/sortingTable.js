// Обработка события на загрузке документа
document.addEventListener("DOMContentLoaded", function() {
    // Поиск таблицы
    const table = document.getElementById("myTable");
    // Поиск столбцов по которым осуществляется сортировка
    const headers = table.querySelectorAll(".sorting");
    // Цикл на перебор заголовков сортировки
    headers.forEach(function(header) {
        // Обработчик клика
        header.addEventListener("click", function() {
            const column = header.cellIndex;
            const rows = Array.from(table.querySelectorAll("tbody tr"));
            // Сортировка
            rows.sort(function(a, b) {
                const aValue = a.cells[column].textContent.trim();
                const bValue = b.cells[column].textContent.trim();
                return bValue.localeCompare(aValue, undefined, { numeric: true, sensitivity: 'base' });
            });
            // Вставка отсротированных строк
            rows.forEach(function(row) {
                table.querySelector("tbody").appendChild(row);
            });
        });
    });
});
