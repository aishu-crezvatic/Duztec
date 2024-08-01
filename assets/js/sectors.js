document.addEventListener('DOMContentLoaded', function() {
    const industries = [
        {
            id: 1,
            name: 'Cement Industry',
            image: 'assets/images/c1.jpg',
            description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vehicula ipsum at dui iaculis, sit amet bibendum lacus ornare. Morbi vel felis auctor, interdum nulla at, elementum lacus. Ut nec dictum mauris. Vestibulum sit amet mauris interdum, pellentesque ex ut, cursus dolor. Nullam ac libero sit amet tortor ullamcorper tempus. Praesent malesuada, lacus sed auctor fermentum, magna turpis scelerisque arcu, nec auctor ipsum nisl nec dui. Phasellus varius, urna vel scelerisque suscipit, nisi libero convallis lacus, at venenatis sem urna eu quam. Proin pretium mauris et metus dictum, et cursus urna vestibulum. Sed id consectetur turpis. Mauris scelerisque, lectus id lacinia vehicula, turpis eros posuere velit, et fringilla ligula sem ut nunc. In auctor, ligula id tempor fermentum, sapien ipsum feugiat ex, vitae fermentum mi quam sit amet libero.',
            gallery_image: 'assets/images/c1.jpg',
            slider1: ['assets/images/c1.jpg', 'assets/images/c1.jpg'],
            slider2: ['assets/images/c1.jpg', 'assets/images/c1.jpg']
        },
        {
            id: 2,
            name: 'Construction and Demolition Industry',
            image: 'assets/images/c1.jpg',
            description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vehicula ipsum at dui iaculis, sit amet bibendum lacus ornare. Morbi vel felis auctor, interdum nulla at, elementum lacus. Ut nec dictum mauris. Vestibulum sit amet mauris interdum, pellentesque ex ut, cursus dolor. Nullam ac libero sit amet tortor ullamcorper tempus. Praesent malesuada, lacus sed auctor fermentum, magna turpis scelerisque arcu, nec auctor ipsum nisl nec dui. Phasellus varius, urna vel scelerisque suscipit, nisi libero convallis lacus, at venenatis sem urna eu quam. Proin pretium mauris et metus dictum, et cursus urna vestibulum. Sed id consectetur turpis. Mauris scelerisque, lectus id lacinia vehicula, turpis eros posuere velit, et fringilla ligula sem ut nunc. In auctor, ligula id tempor fermentum, sapien ipsum feugiat ex, vitae fermentum mi quam sit amet libero.',
            gallery_image: 'assets/images/c1.jpg',
            slider1: ['assets/images/c1.jpg', 'assets/images/c1.jpg'],
            slider2: ['assets/images/c1.jpg', 'assets/images/c1.jpg']
        },
        {
            id: 3,
            name: 'Mining Industry',
            image: 'assets/images/c1.jpg',
            description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vehicula ipsum at dui iaculis, sit amet bibendum lacus ornare. Morbi vel felis auctor, interdum nulla at, elementum lacus. Ut nec dictum mauris. Vestibulum sit amet mauris interdum, pellentesque ex ut, cursus dolor. Nullam ac libero sit amet tortor ullamcorper tempus. Praesent malesuada, lacus sed auctor fermentum, magna turpis scelerisque arcu, nec auctor ipsum nisl nec dui. Phasellus varius, urna vel scelerisque suscipit, nisi libero convallis lacus, at venenatis sem urna eu quam. Proin pretium mauris et metus dictum, et cursus urna vestibulum. Sed id consectetur turpis. Mauris scelerisque, lectus id lacinia vehicula, turpis eros posuere velit, et fringilla ligula sem ut nunc. In auctor, ligula id tempor fermentum, sapien ipsum feugiat ex, vitae fermentum mi quam sit amet libero.',
            gallery_image: 'assets/images/c1.jpg',
            slider1: ['assets/images/c1.jpg', 'assets/images/c1.jpg'],
            slider2: ['assets/images/c1.jpg', 'assets/images/c1.jpg']
        },
        {
            id: 4,
            name: 'Metal Industry',
            image: 'assets/images/c1.jpg',
            description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vehicula ipsum at dui iaculis, sit amet bibendum lacus ornare. Morbi vel felis auctor, interdum nulla at, elementum lacus. Ut nec dictum mauris. Vestibulum sit amet mauris interdum, pellentesque ex ut, cursus dolor. Nullam ac libero sit amet tortor ullamcorper tempus. Praesent malesuada, lacus sed auctor fermentum, magna turpis scelerisque arcu, nec auctor ipsum nisl nec dui. Phasellus varius, urna vel scelerisque suscipit, nisi libero convallis lacus, at venenatis sem urna eu quam. Proin pretium mauris et metus dictum, et cursus urna vestibulum. Sed id consectetur turpis. Mauris scelerisque, lectus id lacinia vehicula, turpis eros posuere velit, et fringilla ligula sem ut nunc. In auctor, ligula id tempor fermentum, sapien ipsum feugiat ex, vitae fermentum mi quam sit amet libero.',
            gallery_image: 'assets/images/c1.jpg',
            slider1: ['assets/images/c1.jpg', 'assets/images/c1.jpg'],
            slider2: ['assets/images/c1.jpg', 'assets/images/c1.jpg']
        },
        {
            id: 5,
            name: 'Ports and Terminals Industry',
            image: 'assets/images/c1.jpg',
            description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vehicula ipsum at dui iaculis, sit amet bibendum lacus ornare. Morbi vel felis auctor, interdum nulla at, elementum lacus. Ut nec dictum mauris. Vestibulum sit amet mauris interdum, pellentesque ex ut, cursus dolor. Nullam ac libero sit amet tortor ullamcorper tempus. Praesent malesuada, lacus sed auctor fermentum, magna turpis scelerisque arcu, nec auctor ipsum nisl nec dui. Phasellus varius, urna vel scelerisque suscipit, nisi libero convallis lacus, at venenatis sem urna eu quam. Proin pretium mauris et metus dictum, et cursus urna vestibulum. Sed id consectetur turpis. Mauris scelerisque, lectus id lacinia vehicula, turpis eros posuere velit, et fringilla ligula sem ut nunc. In auctor, ligula id tempor fermentum, sapien ipsum feugiat ex, vitae fermentum mi quam sit amet libero.',
            gallery_image: 'assets/images/c1.jpg',
            slider1: ['assets/images/c1.jpg', 'assets/images/c1.jpg'],
            slider2: ['assets/images/c1.jpg', 'assets/images/c1.jpg']
        },
        {
            id: 6,
            name: 'Waste and Recycling Industry',
            image: 'assets/images/c1.jpg',
            description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vehicula ipsum at dui iaculis, sit amet bibendum lacus ornare. Morbi vel felis auctor, interdum nulla at, elementum lacus. Ut nec dictum mauris. Vestibulum sit amet mauris interdum, pellentesque ex ut, cursus dolor. Nullam ac libero sit amet tortor ullamcorper tempus. Praesent malesuada, lacus sed auctor fermentum, magna turpis scelerisque arcu, nec auctor ipsum nisl nec dui. Phasellus varius, urna vel scelerisque suscipit, nisi libero convallis lacus, at venenatis sem urna eu quam. Proin pretium mauris et metus dictum, et cursus urna vestibulum. Sed id consectetur turpis. Mauris scelerisque, lectus id lacinia vehicula, turpis eros posuere velit, et fringilla ligula sem ut nunc. In auctor, ligula id tempor fermentum, sapien ipsum feugiat ex, vitae fermentum mi quam sit amet libero.',
            gallery_image: 'assets/images/c1.jpg',
            slider1: ['assets/images/c1.jpg', 'assets/images/c1.jpg'],
            slider2: ['assets/images/c1.jpg', 'assets/images/c1.jpg']
        },
        {
            id: 7,
            name: 'Coal and Power Industry',
            image: 'assets/images/c1.jpg',
            description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vehicula ipsum at dui iaculis, sit amet bibendum lacus ornare. Morbi vel felis auctor, interdum nulla at, elementum lacus. Ut nec dictum mauris. Vestibulum sit amet mauris interdum, pellentesque ex ut, cursus dolor. Nullam ac libero sit amet tortor ullamcorper tempus. Praesent malesuada, lacus sed auctor fermentum, magna turpis scelerisque arcu, nec auctor ipsum nisl nec dui. Phasellus varius, urna vel scelerisque suscipit, nisi libero convallis lacus, at venenatis sem urna eu quam. Proin pretium mauris et metus dictum, et cursus urna vestibulum. Sed id consectetur turpis. Mauris scelerisque, lectus id lacinia vehicula, turpis eros posuere velit, et fringilla ligula sem ut nunc. In auctor, ligula id tempor fermentum, sapien ipsum feugiat ex, vitae fermentum mi quam sit amet libero.',
            gallery_image: 'assets/images/c1.jpg',
            slider1: ['assets/images/c1.jpg', 'assets/images/c1.jpg'],
            slider2: ['assets/images/c1.jpg', 'assets/images/c1.jpg']
        },
        {
            id: 8,
            name: 'Crusher Plant Industry',
            image: 'assets/images/c1.jpg',
            description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vehicula ipsum at dui iaculis, sit amet bibendum lacus ornare. Morbi vel felis auctor, interdum nulla at, elementum lacus. Ut nec dictum mauris. Vestibulum sit amet mauris interdum, pellentesque ex ut, cursus dolor. Nullam ac libero sit amet tortor ullamcorper tempus. Praesent malesuada, lacus sed auctor fermentum, magna turpis scelerisque arcu, nec auctor ipsum nisl nec dui. Phasellus varius, urna vel scelerisque suscipit, nisi libero convallis lacus, at venenatis sem urna eu quam. Proin pretium mauris et metus dictum, et cursus urna vestibulum. Sed id consectetur turpis. Mauris scelerisque, lectus id lacinia vehicula, turpis eros posuere velit, et fringilla ligula sem ut nunc. In auctor, ligula id tempor fermentum, sapien ipsum feugiat ex, vitae fermentum mi quam sit amet libero.',
            gallery_image: 'assets/images/c1.jpg',
            slider1: ['assets/images/c1.jpg', 'assets/images/c1.jpg'],
            slider2: ['assets/images/c1.jpg', 'assets/images/c1.jpg']
        },
        {
            id: 9,
            name: 'Agriculture Industry',
            image: 'assets/images/c1.jpg',
            description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vehicula ipsum at dui iaculis, sit amet bibendum lacus ornare. Morbi vel felis auctor, interdum nulla at, elementum lacus. Ut nec dictum mauris. Vestibulum sit amet mauris interdum, pellentesque ex ut, cursus dolor. Nullam ac libero sit amet tortor ullamcorper tempus. Praesent malesuada, lacus sed auctor fermentum, magna turpis scelerisque arcu, nec auctor ipsum nisl nec dui. Phasellus varius, urna vel scelerisque suscipit, nisi libero convallis lacus, at venenatis sem urna eu quam. Proin pretium mauris et metus dictum, et cursus urna vestibulum. Sed id consectetur turpis. Mauris scelerisque, lectus id lacinia vehicula, turpis eros posuere velit, et fringilla ligula sem ut nunc. In auctor, ligula id tempor fermentum, sapien ipsum feugiat ex, vitae fermentum mi quam sit amet libero.',
            gallery_image: 'assets/images/c1.jpg',
            slider1: ['assets/images/c1.jpg', 'assets/images/c1.jpg'],
            slider2: ['assets/images/c1.jpg', 'assets/images/c1.jpg']
        },
    ];
    

    const industryLinksContainer = document.getElementById('industry-links');
    const industryMainImage = document.getElementById('industry-main-image');
    const industrySubtitle = document.getElementById('industry-subtitle');
    const industryDescription = document.getElementById('industry-description');
    const industryGalleryImage = document.getElementById('industry-gallery-image');

    function populateIndustryLinks() {
        industryLinksContainer.innerHTML = industries.map(industry => 
            `<li class="py-3"><a href="#" data-id="${industry.id}" class="industry-link">${industry.name}</a></li>`
        ).join('');
    }

    function updateIndustryDetails(industry) {
        industryMainImage.src = industry.image;
        industrySubtitle.textContent = industry.name;
        industryDescription.textContent = industry.description;
        industryGalleryImage.src = industry.gallery_image;
        
        initializeSlider('slider1', industry.slider1);
        initializeSlider('slider2', industry.slider2);
    }

    function initializeSlider(sliderId, images) {
        const slider = document.getElementById(sliderId);
        const slidesContainer = slider.querySelector('.slider');
        const prevBtn = slider.querySelector('.prev');
        const nextBtn = slider.querySelector('.next');

        let index = 0;

        slidesContainer.innerHTML = images.map(img => `<div class="slide"><img src="${img}" alt=""></div>`).join('');
        
        const slideElements = slidesContainer.querySelectorAll('.slide');

        function showSlide(n) {
            index = (n + slideElements.length) % slideElements.length;
            const offset = -index * 100; // Move slider container to show the correct slide
            slidesContainer.style.transform = `translateX(${offset}%)`;
        }

        prevBtn.addEventListener('click', () => showSlide(index - 1));
        nextBtn.addEventListener('click', () => showSlide(index + 1));

        showSlide(index);
    }

    industryLinksContainer.addEventListener('click', function(event) {
        event.preventDefault();
        if (event.target.classList.contains('industry-link')) {
            const industryId = parseInt(event.target.getAttribute('data-id'));
            const industry = industries.find(ind => ind.id === industryId);
            updateIndustryDetails(industry);
        }
    });

    // Populate the industry links on page load and show the first industry's details
    populateIndustryLinks();
    if (industries.length > 0) {
        updateIndustryDetails(industries[0]);
    }
});
