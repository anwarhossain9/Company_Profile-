import React from 'react'

function ManagementMessage() {
  return (
    <div className="grid md:grid-cols-2 gap-6 md:space-x-10 px-2 items-center justify-center card shadow-sm py-5">
      {/* Card 1 */}
      <div className='mx-auto md:px-4'>
        <div className="flex flex-col sm:flex-row items-start sm:items-end gap-4 mb-4">
          <img className="w-32 sm:w-[150px] rounded" src="https://img.freepik.com/free-photo/management-coaching-business-dealing-mentor-concept_53876-133858.jpg" alt="Management" />
          <div>
            <h1 className="text-lg sm:text-xl md:text-2xl font-semibold">Name of Management</h1>
            <h2 className="text-base sm:text-lg">Position of Management</h2>
          </div>
        </div>
        <p className="text-justify text-sm md:text-base">
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis, nam? Harum hic, quaerat cupiditate incidunt mollitia Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis sit unde cum cupiditate? In voluptatum eaque earum quas porro at quaerat quidem sapiente asperiores recusandae vitae, optio cumque error tempore tenetur ratione sint dolores deleniti explicabo ea, iure maxime! Illo debitis earum ex ipsam id! Optio amet aliquam expedita odit, mollitia atque excepturi, tempore tenetur rem neque, porro voluptates? Placeat!
        </p>
      </div>

      {/* Card 2 */}
      <div className='mx-auto md:px-4'>
        <div className="flex flex-col sm:flex-row items-start sm:items-end gap-4 mb-4">
          <img className="w-32 sm:w-[150px] rounded" src="https://img.freepik.com/free-photo/management-coaching-business-dealing-mentor-concept_53876-133858.jpg" alt="Management" />
          <div>
            <h1 className="text-lg sm:text-xl md:text-2xl font-semibold">Name of Management</h1>
            <h2 className="text-base sm:text-lg">Position of Management</h2>
          </div>
        </div>
        <p className="text-justify text-sm md:text-base">
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis, nam? Harum hic, quaerat cupiditate incidunt mollitia Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloribus eius, officia reprehenderit repellat ipsum facilis illo nihil voluptatem exercitationem delectus corrupti consequatur culpa quae vero! Ea nam fugiat, itaque eos quidem in error quisquam, officia placeat quis distinctio voluptate! Earum quam facere in sequi nobis necessitatibus sunt saepe illum. Voluptatem explicabo iure iusto nemo quae facilis maxime! Obcaecati, dolor neque.
        </p>
      </div>
    </div>

  )
}

export default ManagementMessage