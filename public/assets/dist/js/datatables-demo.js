$(document).ready(function() {
  let table = $('#dataTable').DataTable();
  
  // Create a new row in the table header
  let row = table.table().header().insertRow(0);
  
  // Initialize the dropdown menus for specific columns
  let columns = [1, 2]; // Change these indices to target the desired columns
  
  for (let i = 0; i < table.columns()[0].length; i++) {
    if (columns.includes(i)) {
      let column = table.column(i);
  
      // Create select element
      let select = document.createElement('select');
      select.style.width = '100%'; // Set the width
      select.style.border = '1px solid #ccc'; // Set the border
      select.style.borderRadius = '4px'; // Set the border radius
      select.style.boxSizing = 'border-box'; // Set the box sizing

      select.style.padding = '6px 0px 6px 0px'; // Set the padding
  
      // Add the select element to the new row of the targeted column
      row.insertCell(column.index()).appendChild(select);
  
      // Apply listener for user change in value
      select.addEventListener('change', function () {
          var val = $.fn.dataTable.util.escapeRegex(select.value);
  
          column
              .search(val ? '^' + val + '$' : '', true, false)
              .draw();
      });
  
      // Add list of options
      column
          .data()
          .unique()
          .sort()
          .each(function (d, j) {
              select.add(new Option(d));
          });
    } else {
      // Add an empty cell for the columns that don't have a dropdown menu
      row.insertCell(i);
    }
  }
});
