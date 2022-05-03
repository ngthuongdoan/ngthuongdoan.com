import { IconProps } from '.'

const VietnamFlag: React.VFC<IconProps> = ({ size = 24 }) => {
  return (
    <svg
      xmlns="http://www.w3.org/2000/svg"
      xmlnsXlink="http://www.w3.org/1999/xlink"
      width={size}
      height={size * (600 / 900)}
      viewBox="-15 -10 30 20"
    >
      <path fill="#DA251d" d="M-20 -15H20V15H-20z"></path>
      <g id="g" transform="translate(0 -6)">
        <path
          id="g1"
          fill="#FF0"
          d="M0 0L0 6 4 6"
          transform="rotate(18)"
        ></path>
        <use transform="scale(-1 1)" xlinkHref="#g1"></use>
      </g>
      <g id="g2" transform="rotate(72)">
        <use xlinkHref="#g"></use>
        <use transform="rotate(72)" xlinkHref="#g"></use>
      </g>
      <use transform="scale(-1 1)" xlinkHref="#g2"></use>
    </svg>
  )
}

export default VietnamFlag
