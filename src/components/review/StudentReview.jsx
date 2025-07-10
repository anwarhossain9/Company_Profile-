import React from "react";
import "slick-carousel/slick/slick.css";
import "slick-carousel/slick/slick-theme.css";
import Slider from "react-slick";
import useCommentLoader from "../../hooks/useCommentLoader";
import Title from "../title/Title";
import ReviewItem from "./reviewItem/ReviewItem";

function StudentReview() {
  const [comments, loader] = useCommentLoader();
  console.log("student comment",comments)

  if (loader) {
    return (
      <div className="flex justify-center items-center py-10">
        <p className="text-gray-500 text-lg">Loading...</p>
      </div>
    );
  }

  const settings = {
    dots: true,
    infinite: true,
    speed: 500,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 3000,
    pauseOnHover: true,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
    ],
  };

  return (
    <div className="px-2 md:px-4 lg:px-8 py-10 bg-[#EEF3F9] overflow-hidden">
      <Title title="Testimonials" subtitle="What Our Students Say" />
      <div className="slider-container max-w-7xl mx-auto">
        <Slider {...settings}>
          {comments.map((comment, index) => (
            <div key={index} className="px-2">
              <ReviewItem
                image={comment.image}
                name={comment.name}
                review={comment.review}
                rate = {comment.rate}
              />
            </div>
          ))}
        </Slider>
      </div>
    </div>
  );
}

export default StudentReview;