import BatchItem from '../../../components/batchItem/BatchItem'
import Title from '../../../components/title/Title'
import BannerSlider from '../banner/BannerSlider'

function AboutOverview() {
    return (
        <div className='bg-lime-50 mx-auto px-10'>

            <Title title="KNOW MORE ABOUT Institute" subtitle="About Institute"></Title>
            <div className='grid md:grid-cols-2 gap-6 items-center pb-10'>
                <div>
                    <BannerSlider></BannerSlider>
                </div>

                <div>
                    <p className='text-justify '>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Mollitia atque fuga, soluta velit magnam ex dicta, nihil nesciunt accusantium quisquam magni. Magni officia rem facilis laborum debitis doloremque non eum, iste distinctio iure vero. Iure natus molestias asperiores accusamus. Non, dicta, illum illo neque ab repellendus porro, natus repellat nihil vero qui velit totam! Deleniti maxime praesentium alias. Excepturi quo, dolor nisi voluptates iusto consequuntur officiis reiciendis voluptatum, aliquam culpa dignissimos dolores dolorem cupiditate facere et ab id! Natus quod at asperiores mollitia quae tempora minima doloremque tenetur veniam earum blanditiis commodi porro alias, nam assumenda quam laborum, necessitatibus modi quis, autem excepturi eum laudantium pariatur recusandae? Doloremque odit voluptates esse aspernatur animi nemo magnam, minima nesciunt eum ullam.</p>
                    
                    <p className='mt-2 text-xl hover:underline'>Read More...</p>
                </div>

            </div>
            <div className='grid md:grid-cols-4 gap-10'>
                <BatchItem></BatchItem>
                <BatchItem></BatchItem>
                <BatchItem></BatchItem>
                <BatchItem></BatchItem>
            </div>
        </div>
    )
}

export default AboutOverview