const ctx = document.getElementById('revenueChart').getContext('2d');

const datasetsByRange = {
  "Jan 2024 - Dec 2024": {
    revenue: [120, 150, 180, 250, 300, 400, 380, 420, 500, 560, 600, 640],
    expenses: [80, 100, 150, 200, 280, 300, 310, 320, 360, 400, 420, 480],
    total: "$240.8K",
    change: "24.6%"
  },
  "Jan 2023 - Dec 2023": {
    revenue: [100, 180, 210, 260, 300, 400, 380, 420, 500, 560, 453, 345],
    expenses: [60, 100, 150, 200, 280, 300, 310, 320, 360, 400, 420, 480],
    total: "$140.4K",
    change: "18.2%"
  },
  "Jan 2022 - Dec 2022": {
    revenue: [60, 50, 55, 40, 30, 25, 35, 20, 15, 25, 30, 22],
    expenses: [100, 90, 95, 100, 110, 115, 105, 120, 130, 125, 120, 118],
    total: "$-82.4K",
    change: "-14.3%"
  },
  "Jan 2025 - Dec 2025": {
    revenue: [200, 250, 280, 300, 350, 400, 420, 460, 480, 500, 530, 600],
    expenses: [100, 110, 120, 130, 140, 160, 170, 180, 190, 200, 210, 220],
    total: "$320.6K",
    change: "31.8%"
  }
};

let chart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
    datasets: []
  },
  options: {
    responsive: true,
    maintainAspectRatio: false,
    scales: {
      x: {
        grid: { display: false },
        ticks: { color: '#fff' }
      },
      y: {
        grid: { color: '#0F161E' },
        ticks: {
            color: '#fff',
            stepSize: 100,
            callback: function(value) {
                return value + 'K'; 
            }
        },
        min: 0,
        max: 700
      }
    },
    plugins: {
      legend: {
        labels: { 
            color: '#fff',
            usePointStyle: true,       
            pointStyle: 'circle',    
            boxWidth: 7,            
            boxHeight: 7,
            padding: 20 
        }
      }
    }
  }
});

function updateChart(range) {
  const data = datasetsByRange[range];

  let labels = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
  if (range === "Jul 2023 - Dec 2023") {
    labels = ['Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
  }

   
  chart.data.labels = labels;
  chart.data.datasets = []; 

  chart.data.datasets = [
    {
      label: 'Revenue',
      data: data.revenue,
      borderColor: '#FCE803',
      backgroundColor: 'rgba(255, 193, 7, 0.2)',
      tension: 0.4,
      fill: true,
      pointBackgroundColor: '#FCE803'
    },
    {
      label: 'Expenses',
      data: data.expenses,
      borderColor: '#FFFFFF',
      backgroundColor: 'rgba(209, 213, 219, 0.2)',
      tension: 0.4,
      fill: true,
      pointBackgroundColor: '#FFFFFF'
    }
  ];
  chart.update();

  const isNegative = data.total.includes('-');
  const changeElement = document.createElement("span");
  changeElement.classList.add("change-percent-g");

  if (isNegative) {
    changeElement.style.color = "#e74c3c";
    changeElement.style.backgroundColor = "rgba(231, 76, 60, 0.2)";
    changeElement.textContent = `${data.change} ⬇`;
  } else {
   changeElement.style.color = "#14CA74";
   changeElement.style.backgroundColor = "rgba(40, 167, 69, 0.2)";
   changeElement.textContent = `${data.change} ⬆`;
  }

  const revenueAmount = document.querySelector(".revenue-amount-g");
  revenueAmount.innerHTML = `${data.total} `;
  revenueAmount.appendChild(changeElement);
}

 
function toggleDropdown() {
  const dropdown = document.getElementById("dropdown-g");
  dropdown.style.display = dropdown.style.display === "block" ? "none" : "block";
}

function selectRange(range) {
  document.getElementById("selected-range-g").textContent = range;
  toggleDropdown();
  updateChart(range);
}

// Inicializa con el primer rango
updateChart("Jan 2024 - Dec 2024");