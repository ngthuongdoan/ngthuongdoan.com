export default function DemoPage() {
  return (
    <div className="prose h-screen flex items-center justify-center gap-8">
      <section>
        <h1>Typography</h1>
        <div>
          <h1>Heading 1</h1>
          <h2>Heading 2</h2>
          <h3>Heading 3</h3>
          <h4>Heading 4</h4>
          <h5>Heading 5</h5>
          <h6>Heading 6</h6>
          <p>Paragraph</p>
          <code>Code</code>
        </div>
        {/* <a href="https://tailwindcss.com/docs/typography-plugin">
          https://tailwindcss.com/docs/typography-plugin
        </a> */}
      </section>
      <section>
        <h1>Color Palette</h1>
        <div className="inline-flex">
          <div className="w-12 h-12 bg-swatch_1"></div>
          <div className="w-12 h-12 bg-swatch_2"></div>
          <div className="w-12 h-12 bg-swatch_3"></div>
          <div className="w-12 h-12 bg-swatch_4"></div>
          <div className="w-12 h-12 bg-swatch_5"></div>
          <div className="w-12 h-12 bg-swatch_6"></div>
          <div className="w-12 h-12 bg-swatch_7"></div>
        </div>
      </section>
    </div>
  )
}
