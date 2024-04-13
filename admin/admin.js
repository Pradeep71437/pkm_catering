function downloadPDF() {
    var element = document.getElementById('pdfTable');

    html2pdf(element, {
        margin: 1,
        filename: 'order_details.pdf',
        image: { type: 'jpeg', quality: 0.98 },
        html2canvas: { scale: 2 },
        jsPDF: { unit: 'mm', format: 'a4', orientation: 'landscape' }
    });
}

function downloadPDF2() {
    var element = document.getElementById('pdfTable2');

    html2pdf(element, {
        margin: 1,
        filename: 'order_details.pdf',
        image: { type: 'jpeg', quality: 0.98 },
        html2canvas: { scale: 2 },
        jsPDF: { unit: 'mm', format: 'a4', orientation: 'landscape' }
    });
}

function calculatAmount() {

var total = 0;

// Iterate over input fields and calculate total
for (var i = 1; i <= 22; i++) {
var fieldValue = document.getElementById("t" + i).valueAsNumber || 0;
total += fieldValue;
}
document.getElementById("total1").textContent = total;
}

function calculatottotal2() {
    var total = 0;

    // Iterate over input fields and calculate total
    for (var i = 1; i <= 22; i++) {
        var fieldValue = parseFloat(document.getElementById("f" + i).value) || 0;
        total += fieldValue;
    }
    document.getElementById("total").textContent = total;
}

function handleKeyDown(event, nextInputId) {
    if (event.key === "Enter") {
      event.preventDefault();
      document.getElementById(nextInputId).focus();
    } else if (event.key === "ArrowUp" || event.key === "ArrowDown") {
      event.preventDefault();
    }
  }
