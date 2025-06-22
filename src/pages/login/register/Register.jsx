import React from 'react'
import { Link } from 'react-router-dom'

function Register() {
    return (
        <div className='card'>
            <form>
                <div className="hero bg-base-200">
                    <div className="hero-content flex-col lg:flex-row-reverse min-h-[300px] min-w-[300px] lg:min-w-[500px]">
                        <div className="bg-base-100 w-full max-w-sm shadow-2xl">
                            <div className="card-body">
                                <fieldset className="fieldset">
                                    <label className="label">User Name</label>
                                    <input type="email" className="input input-bordered w-full" placeholder="text" required />

                                    <label className="label">Email</label>
                                    <input type="email" className="input input-bordered w-full" placeholder="Email" required />

                                    <label className="label">Password</label>
                                    <input type="password" className="input input-bordered w-full" placeholder="Password" required />

                                    <button type="submit" className="btn btn-info mt-4 w-full">Register</button>

                                    <div className='flex justify-end mt-2'>
                                        <span> Already have an account ?</span>
                                        <Link to="/login" className="link text-sm text-blue-600 hover:underline ml-2">
                                          Login
                                        </Link>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    )
}

export default Register