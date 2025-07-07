import React, { useEffect } from "react"
import { useKeenSlider } from "keen-slider/react"
import "keen-slider/keen-slider.min.css"
import useBannerDataLoader from "../../../hooks/useBannerDataLoader"
import parse from 'html-react-parser';
export default () => {

  const [banner, loader] = useBannerDataLoader();


  const [sliderRef] = useKeenSlider(
    {
      loop: true,
    },
    [
      (slider) => {
        let timeout
        let mouseOver = false
        function clearNextTimeout() {
          clearTimeout(timeout)
        }
        function nextTimeout() {
          clearTimeout(timeout)
          if (mouseOver) return
          timeout = setTimeout(() => {
            slider.next()
          }, 2000)
        }
        slider.on("created", () => {
          slider.container.addEventListener("mouseover", () => {
            mouseOver = true
            clearNextTimeout()
          })
          slider.container.addEventListener("mouseout", () => {
            mouseOver = false
            nextTimeout()
          })
          nextTimeout()
        })
        slider.on("dragStarted", clearNextTimeout)
        slider.on("animationEnded", nextTimeout)
        slider.on("updated", nextTimeout)
      },
    ]
  )

  if (loader) {
    return <p>loading...</p>
  }

  return (
    <>
      <section>
        <div ref={sliderRef} className="keen-slider shadow-xl">

          {
            banner?.length > 0 &&
            banner.map(ban => (
              <div key={ban.id} className="keen-slider__slide relative">
                <img
                  className="w-full md:max-h-[400px] lg:max-h-[400px] w-[550px] object-cover"
                  src={ban.image_url}
                  alt=""
                />

                <div className="absolute bottom-2 md:bottom-3 bg-white/50 px-4 py-2 left-1/2 transform -translate-x-1/2 
                 text-xl sm:text-2xl  rounded-md shadow-md">
                  <h1 className="md:text-2xl text-xl lg:text-3xl font-bold text-center 
                 text-white "> {
                      ban.title
                    }
                  </h1>
                  <p className="text-center  text-base">
                    {
                      parse(ban.description)
                    }
                  </p>
                </div>
              </div>

            ))
          }

        </div>
      </section>
    </>
  )
}
