import React from "react";
import Slider from "react-slick";
import "slick-carousel/slick/slick.css";
import "slick-carousel/slick/slick-theme.css";
import Title from "../../components/title/Title";
import img1 from "../../assets/images/DCIT Logo.png";
import img2 from "../../assets/images/NSDA.png";
import img3 from "../../assets/images/payment.png";
import usePartnerLoader from "../../hooks/usePartnerLoader";

function Partners() {

  const [allPartners, loader] = usePartnerLoader();
  console.log(allPartners);


  if(loader){
    return <p></p>
  }

  const settings = {
    infinite: true,
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: true,
    speed: 3000,
    autoplaySpeed: 3000,
    cssEase: "linear",
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
        },
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
        },
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
        },
      },
    ],
  };

  const partners = [img1, img2, img3, img1, img2, img3];

  return (
    <div className="slider-container max-w-7xl mx-auto px-4 py-8 overflow-hidden">
      <Title title="Our partner" subtitle="Together, we grow stronger" />
      <Slider {...settings}>
        {allPartners.map((img, index) => (
          <div key={index} className="px-2">
            <div className="bg-white rounded-xl border border-[#0056D2] shadow-md p-4 h-full flex items-center justify-center hover:shadow-xl transition-shadow duration-300">
              <img
                src={img.partner_image}
                alt={"abc"}
                className="max-h-24 w-auto object-contain"
              />
            </div>
          </div>
        ))}
      </Slider>
    </div>
  );
}

export default Partners;