import Facebook from './Facebook'
import Github from './Github'
import Linkedin from './Linkedin'

export type IconProps = {
  size?: number
  color?: string
  onClick?: () => void
}

export default {
  Facebook,
  Github,
  Linkedin,
}
