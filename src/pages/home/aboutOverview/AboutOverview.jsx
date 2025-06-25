import { Link } from 'react-router-dom'
import BatchItem from '../../../components/batchItem/BatchItem'
import Title from '../../../components/title/Title'
import BannerSlider from '../banner/BannerSlider'

function AboutOverview() {
    return (
        <div className='bg-lime-50 mx-auto px-10 pb-8'>

            <Title title="KNOW MORE ABOUT Institute" subtitle="About Institute"></Title>
            <div className='grid md:grid-cols-2 gap-6 items-center pb-10 space-x-10'>
                <div className='mx-auto'>
                    <img className='w-full rounded' src="https://www.newmetrics.net/files/uploads/2023/08/Student-Experience-Cover-2.jpg" alt="" />
                </div>

                <div>
                    <p className='text-justify px-2'>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Mollitia atque fuga, soluta velit magnam ex dicta, nihil nesciunt accusantium quisquam magni. Magni officia rem facilis laborum debitis doloremque non eum, iste distinctio iure vero. Iure natus molestias asperiores accusamus. Non, dicta, illum illo neque ab repellendus porro, natus repellat nihil vero qui velit totam! Deleniti maxime praesentium alias. Excepturi quo, dolor nisi voluptates iusto consequuntur officiis reiciendis voluptatum, aliquam culpa dignissimos dolores dolorem cupiditate facere et ab id! Natus quod at asperiores mollitia quae tempora minima doloremque tenetur veniam earum blanditiis commodi porro alias, nam assumenda quam laborum, necessitatibus modi quis, autem excepturi eum laudantium pariatur recusandae? Doloremque odit voluptates esse aspernatur animi nemo magnam, minima nesciunt eum ullam.</p>
                    
                    <p className='mt-2 text-xl hover:underline'><Link to="/about">Read More...</Link></p>
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