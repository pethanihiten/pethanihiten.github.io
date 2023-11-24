export default class Editor {
  constructor(gl) {
    this.gl = gl
    this.startupTime = 0
  }

  async setup() {
    await ImGui.default()
    ImGui.CreateContext()
    ImGui.StyleColorsDark()
    ImGui_Impl.Init(this.gl)
    this.startupTime = Date.now()
  }

  render() {
    const time = Date.now() - this.startupTime
    ImGui_Impl.NewFrame(time)
    ImGui.NewFrame()

    const io = ImGui.GetIO()

    ImGui.SetNextWindowPos(new ImGui.ImVec2(20, 20), ImGui.Cond.Once)
    ImGui.SetNextWindowSize(new ImGui.ImVec2(300, 300), ImGui.Cond.Once)

    ImGui.Begin("Debug")
    ImGui.Text(`${io.Framerate.toFixed(2)}`)
    ImGui.End()

    ImGui.EndFrame()
    ImGui.Render()
    ImGui_Impl.RenderDrawData(ImGui.GetDrawData())
  }
}
