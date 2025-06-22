import React from 'react'
import { Link } from 'react-router-dom'

function Login() {
    return (
        <div className='card'>
            <form>
                <div className="hero bg-base-200">
                    <div className="hero-content flex-col lg:flex-row-reverse min-h-[300px] min-w-[300px] lg:min-w-[500px]">
                        <div className="bg-base-100 w-full max-w-sm shadow-2xl">
                            <div className="card-body">
                                <fieldset className="fieldset">
                                    <label className="label">Email</label>
                                    <input type="email" className="input input-bordered w-full" placeholder="Email" required />

                                    <label className="label">Password</label>
                                    <input type="password" className="input input-bordered w-full" placeholder="Password" required />

                                    <div className="mt-2">
                                        <a className="link link-hover text-sm">Forgot password?</a>
                                    </div>

                                    <button type="submit" className="btn btn-success mt-4 w-full">Login</button>

                                    <div className='flex justify-end mt-2'>
                                        <Link to="/register" className="link text-sm text-blue-600 hover:underline">
                                            Create a new account
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

export default Login