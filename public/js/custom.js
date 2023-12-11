// All javascript code in this project for now is just for demo DON'T RELY ON IT

const random = (max = 100) => {
    return Math.round(Math.random() * max) + 20
  }
  
  const randomData = () => {
    return [
      random(),
      random(),
      random(),
      random(),
      random(),
      random(),
      random(),
      random(),
      random(),
      random(),
      random(),
      random(),
    ]
  }
  
  const months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
  
  const cssColors = (color) => {
    return getComputedStyle(document.documentElement).getPropertyValue(color)
  }
  
  const getColor = () => {
    return window.localStorage.getItem('color') ?? 'cyan'
  }
  
  const colors = {
    primary: cssColors(`--color-${getColor()}`),
    primaryLight: cssColors(`--color-${getColor()}-light`),
    primaryLighter: cssColors(`--color-${getColor()}-lighter`),
    primaryDark: cssColors(`--color-${getColor()}-dark`),
    primaryDarker: cssColors(`--color-${getColor()}-darker`),
  }
  
  const barChart = new Chart(document.getElementById('barChart'), {
    type: 'bar',
    data: {
      labels: months,
      datasets: [
        {
          data: randomData(),
          backgroundColor: colors.primary,
          hoverBackgroundColor: colors.primaryDark,
        },
      ],
    },
    options: {
      scales: {
        yAxes: [
          {
            gridLines: false,
            ticks: {
              beginAtZero: true,
              stepSize: 50,
              fontSize: 12,
              fontColor: '#97a4af',
              fontFamily: 'Open Sans, sans-serif',
              padding: 10,
            },
          },
        ],
        xAxes: [
          {
            gridLines: false,
            ticks: {
              fontSize: 12,
              fontColor: '#97a4af',
              fontFamily: 'Open Sans, sans-serif',
              padding: 5,
            },
            categoryPercentage: 0.5,
            maxBarThickness: '10',
          },
        ],
      },
      cornerRadius: 2,
      maintainAspectRatio: false,
      legend: {
        display: false,
      },
    },
  })
  
  const doughnutChart = new Chart(document.getElementById('doughnutChart'), {
    type: 'doughnut',
    data: {
      labels: ['Oct', 'Nov', 'Dec'],
      datasets: [
        {
          data: [random(), random(), random()],
          backgroundColor: [colors.primary, colors.primaryLighter, colors.primaryLight],
          hoverBackgroundColor: colors.primaryDark,
          borderWidth: 0,
          weight: 0.5,
        },
      ],
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      legend: {
        position: 'bottom',
      },
  
      title: {
        display: false,
      },
      animation: {
        animateScale: true,
        animateRotate: true,
      },
    },
  })
  
  const activeUsersChart = new Chart(document.getElementById('activeUsersChart'), {
    type: 'bar',
    data: {
      labels: [...randomData(), ...randomData()],
      datasets: [
        {
          data: [...randomData(), ...randomData()],
          backgroundColor: colors.primary,
          borderWidth: 0,
          categoryPercentage: 1,
        },
      ],
    },
    options: {
      scales: {
        yAxes: [
          {
            display: false,
            gridLines: false,
          },
        ],
        xAxes: [
          {
            display: false,
            gridLines: false,
          },
        ],
        ticks: {
          padding: 10,
        },
      },
      cornerRadius: 2,
      maintainAspectRatio: false,
      legend: {
        display: false,
      },
      tooltips: {
        prefix: 'Users',
        bodySpacing: 4,
        footerSpacing: 4,
        hasIndicator: true,
        mode: 'index',
        intersect: true,
      },
      hover: {
        mode: 'nearest',
        intersect: true,
      },
    },
  })
  
  const lineChart = new Chart(document.getElementById('lineChart'), {
    type: 'line',
    data: {
      labels: months,
      datasets: [
        {
          data: randomData(),
          fill: false,
          borderColor: colors.primary,
          borderWidth: 2,
          pointRadius: 0,
          pointHoverRadius: 0,
        },
      ],
    },
    options: {
      responsive: true,
      scales: {
        yAxes: [
          {
            gridLines: false,
            ticks: {
              beginAtZero: false,
              stepSize: 50,
              fontSize: 12,
              fontColor: '#97a4af',
              fontFamily: 'Open Sans, sans-serif',
              padding: 20,
            },
          },
        ],
        xAxes: [
          {
            gridLines: false,
          },
        ],
      },
      maintainAspectRatio: false,
      legend: {
        display: false,
      },
      tooltips: {
        hasIndicator: true,
        intersect: false,
      },
    },
  })
  
  let randomUserCount = 0
  
  const usersCount = document.getElementById('usersCount')
  
  const fakeUsersCount = () => {
    randomUserCount = random()
    activeUsersChart.data.datasets[0].data.push(randomUserCount)
    activeUsersChart.data.datasets[0].data.splice(0, 1)
    activeUsersChart.update()
    usersCount.innerText = randomUserCount
  }
  
  setInterval(() => {
    fakeUsersCount()
  }, 1000)

  
// Import from Template ends

// Custom

document.addEventListener("DOMContentLoaded", function(event) {

  const additional = document.getElementById("additional");
  additional.addEventListener("click", function() {
    document.getElementById('uploadImages_step1').click();
  }); 

  const uploadImage = document.getElementById("uploadCardFirst");
  uploadImage.addEventListener("click", function() {
      document.getElementById('uploadImages_step2').click();
    });

});

function showSelectDialog(){
    document.getElementById('selectUploadFiles').click();
}

function isImageSelected(){
    const fileInput = document.getElementById('selectUploadFiles');
    const previewContainer = document.getElementById('SelectedImagesContainer');
            
    
    if (fileInput.files.length >= 6 && fileInput.files.length <= 10){
        // Clear previous previews
        previewContainer.innerHTML = '';

        for (let index = 0; index < fileInput.files.length; index++) {
            const file = fileInput.files[index];

            // Check if it's an image or a video
            if (file.type.startsWith('image')) {
                const img = document.createElement('img');
                img.src = URL.createObjectURL(file);
                // img.style.maxWidth = '100%';
                // img.style.height = '60';
                img.width = 200;
                img.height = 200;
                img.setAttribute("class", "img-child");

                previewContainer.appendChild(img);
            } else if (file.type.startsWith('video')) {
                const video = document.createElement('video');
                video.src = URL.createObjectURL(file);
                // video.style.maxWidth = '100%';
                // video.style.height = 'auto';
                video.width = 200;
                video.height = 200;
                video.controls = false;
                video.setAttribute("class", "img-child");
                previewContainer.appendChild(video);
            }
            
        }
        const parser = new DOMParser();
        var btnAdd = `<div>
        

        <button type="button" onclick="showSelectDialog()" id="btn-SelectImages" data-tooltip-target="selectImages-hover" data-tooltip-trigger="hover">
        <svg xmlns="http://www.w3.org/2000/svg" width="92" height="92" viewBox="0 0 92 92" fill="none">
            <path d="M45.9999 7.66675C24.8631 7.66675 7.66663 24.8632 7.66663 46.0001C7.66663 67.1369 24.8631 84.3334 45.9999 84.3334C67.1368 84.3334 84.3333 67.1369 84.3333 46.0001C84.3333 24.8632 67.1368 7.66675 45.9999 7.66675ZM45.9999 13.4167C64.0293 13.4167 78.5833 27.9707 78.5833 46.0001C78.5833 64.0294 64.0293 78.5834 45.9999 78.5834C27.9706 78.5834 13.4166 64.0294 13.4166 46.0001C13.4166 27.9707 27.9706 13.4167 45.9999 13.4167ZM45.955 26.7922C45.1932 26.8041 44.4672 27.1179 43.9366 27.6647C43.4059 28.2115 43.114 28.9465 43.1249 29.7084V43.1251H29.7083C29.3273 43.1197 28.9491 43.1901 28.5955 43.3321C28.242 43.4742 27.9202 43.6851 27.6489 43.9526C27.3776 44.2201 27.1622 44.5389 27.0151 44.8904C26.8681 45.2418 26.7923 45.6191 26.7923 46.0001C26.7923 46.3811 26.8681 46.7583 27.0151 47.1098C27.1622 47.4613 27.3776 47.78 27.6489 48.0475C27.9202 48.315 28.242 48.5259 28.5955 48.668C28.9491 48.8101 29.3273 48.8804 29.7083 48.8751H43.1249V62.2917C43.1196 62.6727 43.1899 63.0509 43.332 63.4045C43.4741 63.758 43.685 64.0798 43.9525 64.3511C44.22 64.6224 44.5387 64.8378 44.8902 64.9849C45.2417 65.1319 45.6189 65.2077 45.9999 65.2077C46.3809 65.2077 46.7582 65.1319 47.1096 64.9849C47.4611 64.8378 47.7799 64.6224 48.0474 64.3511C48.3149 64.0798 48.5258 63.758 48.6679 63.4045C48.8099 63.0509 48.8803 62.6727 48.8749 62.2917V48.8751H62.2916C62.6726 48.8804 63.0508 48.8101 63.4044 48.668C63.7579 48.5259 64.0797 48.315 64.351 48.0475C64.6223 47.78 64.8377 47.4613 64.9848 47.1098C65.1318 46.7583 65.2075 46.3811 65.2075 46.0001C65.2075 45.6191 65.1318 45.2418 64.9848 44.8904C64.8377 44.5389 64.6223 44.2201 64.351 43.9526C64.0797 43.6851 63.7579 43.4742 63.4044 43.3321C63.0508 43.1901 62.6726 43.1197 62.2916 43.1251H48.8749V29.7084C48.8805 29.3236 48.8087 28.9416 48.6638 28.5851C48.519 28.2285 48.3041 27.9047 48.0318 27.6327C47.7595 27.3608 47.4354 27.1463 47.0786 27.0019C46.7219 26.8575 46.3398 26.7862 45.955 26.7922Z" fill="#1DC5DF"/>
        </svg>
        </button>
        <!-- Tool Tip -->
        <div id="selectImages-hover" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
            Click to select multiple images
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
    </div>`;
        previewContainer.appendChild(parser.parseFromString(btnAdd, 'text/html').firstChild);

        $('.uploadCardSecond').removeAttr("disabled");
        console.log(fileInput.files.length);
    }
    else{
        console.log('Please select between 6 and 10 files (images and/or video).');
        $('.uploadCardSecond').attr("disabled");
        alert('Please select between 6 and 10 files (images and/or video).');
    }
        
}


// Decrease Quantity Number Value
function decreaseValue() {
    var inputElement = document.getElementById('qtyValue');
    var currentValue = parseFloat(inputElement.value);
    
    // Decrease the value by 1, but ensure it doesn't go below 1
    if (currentValue > 1) {
        currentValue -= 1;
    }
    // Update the input element with the new value
    inputElement.value = currentValue;
}
// Increase Quantity Number Value
function increaseValue() {
    var inputElement = document.getElementById('qtyValue');
    var currentValue = parseFloat(inputElement.value);
    
    // Increase the value by 1
    currentValue += 1;
    
    // Update the input element with the new value
    inputElement.value = currentValue;
}

