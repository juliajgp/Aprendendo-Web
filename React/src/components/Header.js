import PropTypes from 'prop-types'
import Button from './Button'

//ou substituir (props) por ({title})
// e {props.title} por {title}
const Header = ({title}) => {

    const onClick = (e) => {
    }

    return (
        <header className='header'>
            <h1>{title}</h1>
            <Button color='green' text='Add' onClick={onClick}/>
        </header>
    )
}

Header.defaultProps = {
    title: 'Task Tracker',
}

Header.propTypes = {
    title: PropTypes.string.isRequired,
}

//styling in react
// const headingStyle = {
//     color:'red',
//     backgroundColor: 'black'
// }

export default Header
