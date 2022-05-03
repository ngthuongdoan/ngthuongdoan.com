import { IconProps } from '.'

const Vue: React.FC<IconProps> = ({ size = 32 }) => {
  return (
    <svg
      xmlns="http://www.w3.org/2000/svg"
      viewBox="0 0 95.625 85"
      fill="#fff"
      fillRule="evenodd"
      stroke="#000"
      strokeLinecap="round"
      strokeLinejoin="round"
      width={size}
      height={size * (85 / 95.625)}
    >
      <use xlinkHref="#I" x="2.813" y="2.5" />
      <symbol id="I" overflow="visible">
        <g stroke="none">
          <path
            d="M45 48.696L17.308 0H0l45 80L90 0H72.692L45 48.696"
            fill="#4dba87"
          />
          <path
            d="M45 19.13L34.616 0H17.308L45 48.696 72.693 0H55.385L45 19.13"
            fill="#435466"
          />
        </g>
      </symbol>
    </svg>
  )
}

export default Vue
