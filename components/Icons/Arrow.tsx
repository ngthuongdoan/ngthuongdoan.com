import { IconProps } from '.'

const Arrow: React.VFC<IconProps> = ({ size = 24, className = '' }) => {
  return (
    <svg
      xmlns="http://www.w3.org/2000/svg"
      fill="none"
      stroke="currentColor"
      className={className}
      width={size}
      height={size}
      viewBox="0 0 24 24"
    >
      <path d="M9 5l7 7-7 7"></path>
    </svg>
  )
}

export default Arrow
