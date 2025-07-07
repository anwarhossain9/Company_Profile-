import React from "react";
import "slick-carousel/slick/slick.css";
import "slick-carousel/slick/slick-theme.css";
import Slider from "react-slick";
import useCommentLoader from "../../hooks/useCommentLoader";
import Title from "../title/Title";
import ReviewItem from "./reviewItem/ReviewItem";
function StudentReview() {


    const [comments, loader] = useCommentLoader()
    if (loader) {
        return <p>Loadinger ...</p>
    }
    const settings = {
        dots: true,
        infinite: true,
        speed: 500,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        pauseOnHover: true,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    initialSlide: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    };
    return (
        <div className="px-2 md:px-4 lg:px-8 bg-[#EEF3F9]">
            <Title title="Testimonials" subtitle="What Our Students Say"></Title>
            <div className="slider-container">
                <Slider {...settings}>
                    {
                        comments.map(comment =>
                            <ReviewItem image={comment.image} name={comment.name} review={comment.review}></ReviewItem>
                        )
                    }
                </Slider>
            </div>
        </div>
    );
}

export default StudentReview