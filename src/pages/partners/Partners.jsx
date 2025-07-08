import React from "react";
import Slider from "react-slick";
import "slick-carousel/slick/slick.css";
import "slick-carousel/slick/slick-theme.css";
import usePartnerLoader from "../../hooks/usePartnerLoader";
import Title from "../../components/title/Title";

function Partners() {
  // Load partner data & loading state
  const [partners, loader] = usePartnerLoader();

  // Slick slider settings
  const settings = {
    infinite: true,
    autoplay: true,
    speed: 3000,
    autoplaySpeed: 3000,
    cssEase: "linear",
    slidesToShow: 4,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1280, // large screens
        settings: {
          slidesToShow: 4,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 1024, // tablets & small laptops
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 768, // tablets
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 480, // mobile
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
    ],
  };

  // Show loading state while fetching partners
  if (loader) {
    return (
      <div className="flex justify-center items-center min-h-[200px]">
        <p className="text-lg text-gray-500">Loading partners...</p>
      </div>
    );
  }

  return (
    <div className="slider-container mx-auto py-8 px-2 md:px-4 lg:px-8">
      {/* Title */}
      <Title title="Our partner" subtitle="Together, we grow stronger" />

      {/* Slider */}
      <Slider {...settings}>
        {partners.map((partner, index) => (
          <div key={index} className="px-1 sm:px-2">
            <div className="bg-white rounded-xl border border-[#0056D2] shadow-md p-2 sm:p-4 hover:shadow-xl transition-shadow duration-300 flex items-center justify-center min-h-[100px]">
              <img
                src={partner.partner_image}
                alt="Partner"
                className="w-full max-h-20 sm:max-h-24 md:max-h-28 lg:max-h-32 object-contain"
              />
               
            </div>
          </div>
        ))}
      </Slider>
    </div>
  );
}

export default Partners;
