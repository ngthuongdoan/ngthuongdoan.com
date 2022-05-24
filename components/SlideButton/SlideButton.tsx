import Icons from 'components/Icons'
import { DetailedHTMLProps, HTMLAttributes } from 'react'
import { CustomArrowProps } from 'react-slick'

type SlideButtonProps = {
  className?: string
  mode?: 'previous' | 'next'
} & DetailedHTMLProps<HTMLAttributes<HTMLButtonElement>, HTMLButtonElement> &
  CustomArrowProps

const SlideButton: React.FC<SlideButtonProps> = ({
  className = '',
  mode = 'next',
  ...rest
}) => {
  return (
    <button
      {...rest}
      className={`p-3 text-swatch_6 border border-swatch_6 rounded-full hover:bg-swatch_6 hover:text-swatch_1 prev-button ${className}`}
    >
      <Icons.Arrow
        className={mode === 'previous' ? 'transform -rotate-180' : ''}
      />
    </button>
  )
}

export default SlideButton
