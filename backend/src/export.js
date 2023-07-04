        function exportToExcel() {
          var table = document.getElementById('data-table');
          var rows = table.getElementsByTagName('tr');
          var csvContent = '';

          for (var i = 0; i < rows.length; i++) {
            var cells = rows[i].getElementsByTagName('td');
            var row = [];

            for (var j = 0; j < cells.length; j++) {
              var cellData = cells[j].textContent.trim();
              if (/^[0-9.]+$/.test(cellData)) { // Check if data is numeric
                row.push('\t' + cellData); // Align numeric data to the right
              } else {
                row.push(cellData);
              }
            }

            var thCells = rows[i].getElementsByTagName('th');
            for (var j = 0; j < thCells.length; j++) {
              row.push(thCells[j].textContent.trim());
            }

            csvContent += row.join(',') + '\r\n';
          }

          var link = document.createElement('a');
          link.href = 'data:text/csv;charset=utf-8,' + encodeURIComponent(csvContent);
          link.download = 'report.csv';
          link.click();
        }

        function exportToExcel2() {
          var table = document.getElementById('data-table');
          var rows = table.getElementsByTagName('tr');
          var csvContent = '';

          for (var i = 0; i < rows.length; i++) {
            var cells = rows[i].getElementsByTagName('td');
            var row = [];

            for (var j = 0; j < cells.length; j++) {
              var cellData = cells[j].textContent.trim();
              if (/^[0-9.]+$/.test(cellData)) { // Check if data is numeric
                row.push('\t' + cellData); // Align numeric data to the right
              } else {
                row.push(cellData);
              }
            }

            var thCells = rows[i].getElementsByTagName('th');
            for (var j = 0; j < thCells.length; j++) {
              row.push(thCells[j].textContent.trim());
            }

            csvContent += row.join(',') + '\r\n';
          }

          var link = document.createElement('a');
          link.href = 'data:text/csv;charset=utf-8,' + encodeURIComponent(csvContent);
          link.download = 'new_ride.csv';
          link.click();
        }

        function exportToExcel1() {
          var table = document.getElementById('data-table');
          var rows = table.getElementsByTagName('tr');
          var csvContent = '';

          for (var i = 0; i < rows.length; i++) {
            var cells = rows[i].getElementsByTagName('td');
            var row = [];

            for (var j = 0; j < cells.length; j++) {
              var cellData = cells[j].textContent.trim();
              if (/^[0-9.]+$/.test(cellData)) { // Check if data is numeric
                row.push('\t' + cellData); // Align numeric data to the right
              } else {
                row.push(cellData);
              }
            }

            var thCells = rows[i].getElementsByTagName('th');
            for (var j = 0; j < thCells.length; j++) {
              row.push(thCells[j].textContent.trim());
            }

            csvContent += row.join(',') + '\r\n';
          }

          var link = document.createElement('a');
          link.href = 'data:text/csv;charset=utf-8,' + encodeURIComponent(csvContent);
          link.download = 'cancel_ride.csv';
          link.click();
        }

        function exportToExcel3() {
          var table = document.getElementById('data-table');
          var rows = table.getElementsByTagName('tr');
          var csvContent = '';

          for (var i = 0; i < rows.length; i++) {
            var cells = rows[i].getElementsByTagName('td');
            var row = [];

            for (var j = 0; j < cells.length; j++) {
              var cellData = cells[j].textContent.trim();
              if (/^[0-9.]+$/.test(cellData)) { // Check if data is numeric
                row.push('\t' + cellData); // Align numeric data to the right
              } else {
                row.push(cellData);
              }
            }

            var thCells = rows[i].getElementsByTagName('th');
            for (var j = 0; j < thCells.length; j++) {
              row.push(thCells[j].textContent.trim());
            }

            csvContent += row.join(',') + '\r\n';
          }

          var link = document.createElement('a');
          link.href = 'data:text/csv;charset=utf-8,' + encodeURIComponent(csvContent);
          link.download = 'complete_ride.csv';
          link.click();
        }
        