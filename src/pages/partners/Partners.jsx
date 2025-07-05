import React from "react";
import Slider from "react-slick";
import "slick-carousel/slick/slick.css";
import "slick-carousel/slick/slick-theme.css";
import usePartnerLoader from "../../hooks/usePartnerLoader";
import Title from "../../components/title/Title";

function Partners() {
  const [partners, loader] = usePartnerLoader();

  const settings = {
    // dots: true,
    infinite: true,
    slidesToShow: 4,
    slidesToScroll: 4,
    autoplay: true,
    speed: 5000,
    autoplaySpeed: 5000,
    cssEase: "linear",
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 4,
          infinite: true,
          dots: true,
        },
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          initialSlide: 3,
        },
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
    ],
  };

  if (loader) {
    return (
      <div className="flex justify-center items-center min-h-[200px]">
        <p className="text-lg text-gray-500">Loading partners...</p>
      </div>
    );
  }

  return (
    <div className="slider-container max-w-7xl mx-auto px-4 py-8">
       <Title title="Our partner" subtitle=" Together, we grow stronger"></Title>
      <Slider {...settings}>
        {partners.map((partner, index) => (
          <div key={index}>
            <div className="bg-white rounded-xl border border-[#0056D2] shadow-md p-4 mx-2 hover:shadow-xl transition-shadow duration-300">
              <img
                src={partner.partner_image}
                alt="Partner"
                className="mx-auto h-24 object-contain "
              />
            </div>
          </div>
        ))}
      </Slider>
    </div>
  );
}

export default Partners;
