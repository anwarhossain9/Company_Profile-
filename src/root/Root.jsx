import { AllCoursesContext } from '../assets/context/CourseContext';
import useRegularDataLoader from '../hooks/useRegularDataLoader';

function Root({ children }) {
    const [regularCourses, loader] = useRegularDataLoader();


    if (loader) {
        return <p>loading...</p>;
    }
    return (
        <AllCoursesContext.Provider value={regularCourses}>
            {children}
        </AllCoursesContext.Provider>
    )
}

export default Root